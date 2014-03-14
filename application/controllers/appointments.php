<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointments extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->User_model->isLoggedIn();
		$this->load->model('Appointment_model');
	}


	public function index()
	{
		// get user appointments for today
		//$data['appointments'] = $this->Blog_model->getPublishedPosts();
		$data['main'] = 'appointments/index';
		$this->load->view('back_template/template', $data);
	}

	



}