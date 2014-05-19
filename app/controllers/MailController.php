<?php

/**
 * MailController
 *
 * @author Greg Bueno
 */
class MailController extends BaseController {
	
	public $to;
	public $from_email;
	public $from_name;
	public $subject_prefix;
	public $subject;
	public $message;
	public $redirect;
	
	/**
	 * VmMailer
	 * 
	 * VmMailer process an e-mail form containing hidden fake input fields
	 * to fool spambots. If a spambot fills in any of the hidden fake
	 * fields, form processing is halted.
	 * 
	 * @param type $params Standard CI configuration paramaters. Unused.
	 */
	public function __construct($params = null) {
		$this->redirect = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $_SERVER['REQUEST_URI'];
		$this->subject_prefix = 'Vigilant Media Network: feedback';
	}
	
	public function email()
	{
		$hidden_fields = array('i', 's', 'r', 'm');
		$shown_fields = array('from_name' => 'n',
		'from_email' => 'a',
		'subject' => 't',
		'message' => 'b');
		$this->process_email_form($hidden_fields, $shown_fields);
	}
	
	/**
	 * process_email_form
	 * 
	 * process_email_form() checks whether values are set in input fields
	 * that have been hidden in the UI. If a value is found, form processing
	 * stops. If no values are found, form processing continues.
	 * 
	 * @param array $hidden_fields The name of the fields hidden in the UI
	 * @param array $shown_fields The name and values of fields displayed in the UI
	 */
	protected function process_email_form($hidden_fields, $shown_fields) {
		$send_mail = true;
		
		// Check whether the value of any hidden field is set.
		foreach ($hidden_fields as $hidden_field) {
			$check_field = Input::get($hidden_field);
			// Do not go any further.
			if (!empty($check_field)) {
				$send_mail = false;
				header('Location: ' . $_SERVER['HTTP_REFERER']);
				die();
			}
		}
		
		// If no hidden fields are set, send the e-mail.
		if ($send_mail == true) {
			foreach ($shown_fields as $shown_field => $value) {
				$this->{$shown_field} = stripslashes(Input::get($value));
			}

			$this->send_mail();
		}
	}
	
	/**
	 * send_mail
	 * 
	 * send_mail() sends an e-mail message. Not surprisingly.
	 * 
	 * @todo Support the use of Smarty templates for custom messages.
	 */
	protected function send_mail() {
		// Prepend a prefix.
		$subject = (empty($this->subject)) ? $this->subject_prefix : $this->subject_prefix . ': ' . $this->subject;
		
		// Build the message body.
		$message_footer = '';
		$message_footer .= "\n\n";
		$message_footer .= "-----------------------------\n";
		if (!empty($_SERVER['REMOTE_HOST'])) {
			$message_footer .= "REMOTE_HOST: " . $_SERVER['REMOTE_HOST'] . "\n";
		}
		$message_footer .= "REMOTE_ADDR: " . $_SERVER['REMOTE_ADDR'] . "\n";
		$message_footer .= "HTTP_USER_AGENT: " . $_SERVER['HTTP_USER_AGENT'] . "\n";
		$this->message .= $message_footer;
		
		// Configure the CodeIgniter email class.
		$this->CI->email->initialize($this->mail_config);

		$this->CI->email->from($this->from_email, $this->from_name);
		$this->CI->email->to($this->to);
		$this->CI->email->subject($subject);
		$this->CI->email->message($this->message);
		
		// Send the e-mail.
		if (false !== $this->CI->email->send()) {
			header('Location: ' . $this->redirect);
			die();
		}
		
		// Debug on failure.
		echo '<pre>' . "\n";
		echo $this->CI->email->print_debugger();
		echo '</pre>' . "\n";
	}
}
