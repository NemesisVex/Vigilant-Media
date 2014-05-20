<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	private $layout_variables = array();
	
	public function __construct()
	{
		$this->layout_variables = array(
			'vigilantmedia_cdn_uri' => 'http://vigilant-media.s3.amazonaws.com',
			'copyright_year' => date('Y'),
		);
	}

	public function showWelcome()
	{
		return View::make('hello');
	}
	
	public function index()
	{
		$page_variables = array();
		
		$data = array_merge($page_variables, $this->layout_variables);
		return View::make('index', $data);
	}
	
	public function projects()
	{
		$page_variables = array();
		
		$data = array_merge($page_variables, $this->layout_variables);
		return View::make('projects', $data);
	}
	
	public function resume()
	{
		$page_variables = array();
		
		$resume_path = $_SERVER['DOCUMENT_ROOT'] . '/content/resume.xml';
		if (false !== ($fp = @fopen($resume_path, 'r')))
		{
			$resume_input = fread($fp, filesize($resume_path));
			fclose($fp);
		}
		$resume_xml = simplexml_load_string($resume_input);

		$contact = $resume_xml->xpath('/resume/contact');
		$professional = $resume_xml->xpath('/resume/experience[@type="professional"]');
		$miscellaneous = $resume_xml->xpath('/resume/experience[@type="miscellaneous"]');
		$education = $resume_xml->xpath('/resume/experience[@type="education"]');
		$projects = $resume_xml->xpath('/resume/experience[@type="projects"]');
		$skills = $resume_xml->xpath('/resume/experience[@type="skills"]');
		$summary = $resume_xml->xpath('/resume/experience[@type="summary"]');
		
		foreach ($skills[0] as $entry) {
			$skill_list = (array) $entry->skills->skill;
			$entry->skill_list = implode(', ', $skill_list);
		}
		
		$page_variables = array(
			'contact' => $contact,
			'professional' => $professional,
			'miscellaneous' => $miscellaneous,
			'education' => $education,
			'projects' => $projects,
			'skills' => $skills,
			'summary' => $summary,
		);
		
		$data = array_merge($page_variables, $this->layout_variables);
		return View::make('resume', $data);
	}
	
	public function contact()
	{
		$page_variables = array();
		
		$data = array_merge($page_variables, $this->layout_variables);
		return View::make('contact', $data);
	}
	
	public function contact_sent()
	{
		$page_variables = array();
		
		$data = array_merge($page_variables, $this->layout_variables);
		return View::make('contact_sent', $data);
	}
	
}
