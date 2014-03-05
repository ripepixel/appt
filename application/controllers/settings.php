<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->User_model->isLoggedIn();
	}



	public function index()
	{
		// pricing page
		$data['main'] = 'settings/index';
		$this->load->view('back_template/template', $data);
	}

	public function opening_hours()
	{
		# business opening hours
		$data['main'] = 'settings/opening_hours';
		$this->load->view('back_template/template', $data);
	}
	
	
	
}

