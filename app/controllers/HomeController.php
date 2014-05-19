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
		
		$data = array_merge($page_variables, $this->layout_variables);
		return View::make('resume', $data);
	}
	
	public function contact()
	{
		$page_variables = array();
		
		$data = array_merge($page_variables, $this->layout_variables);
		return View::make('contact', $data);
	}
	
}
