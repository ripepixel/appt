<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['main'] = 'pages/index';
		$this->load->view('template/template', $data);
	}

	public function features()
	{
		$data['main'] = 'pages/features';
		$this->load->view('template/template', $data);
	}

	public function contact()
	{
		$data['main'] = 'pages/contact';
		$this->load->view('template/template', $data);
	}






}

