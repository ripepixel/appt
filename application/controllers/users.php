<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function signup()
	{
		$data['main'] = 'users/signup';
		$this->load->view('template/template', $data);
	}
}

