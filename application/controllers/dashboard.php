<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->User_model->isLoggedIn();
	}



	public function index()
	{
		// pricing page
		$data['main'] = 'dashboard/index';
		$this->load->view('back_template/template', $data);
	}

	
	
	
	
}

