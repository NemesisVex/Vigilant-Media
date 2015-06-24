<?php

/**
 * MailController
 *
 * @author Greg Bueno
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {
	
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
		$this->to = 'greg@gregbueno.com';
		$this->redirect = '/contact/sent/';
		$this->subject_prefix = 'Vigilant Media Network';
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
		$subject = '';
		if (!empty($this->subject_prefix)) { $subject .= $this->subject_prefix . ': '; }
		$subject .= (empty($this->subject)) ? 'feedback' : $this->subject;
		
		$_this = $this;
		Mail::send( array('text' => 'emails.feedback'), array( 'body' => $this->message ), function($message) use ($_this, $subject) {
			$message->from($_this->from_email, $_this->from_name);
			$message->to($_this->to);
			$message->subject($subject);
		} );
		
		header('Location: ' . $this->redirect);
		die();
	}
}
