<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Records extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();
		
		$this->data['page_title'] = 'Parking Records';
		$this->load->model('model_records');
	}

	public function index()
	{
		$record_data = $this->model_records->getRecordsData();
	
		$result = array();
		foreach ($record_data as $k => $v) {
			$result[$k]['records'] = $v;
		}

		$this->data['record_data'] = $result;

		$this->render_template('records/index', $this->data);
	}
}