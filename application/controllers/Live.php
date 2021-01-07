<?php 

class Live extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();
		
		$this->data['page_title'] = 'Live Feed';
	}

	public function index()
	{
		$this->render_template('live/index', $this->data);
	}

}