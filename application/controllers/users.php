<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function signup()
	{
		// pricing page
		$data['main'] = 'users/signup';
		$this->load->view('template/template', $data);
	}

	public function register()
	{
		$this->load->model('Business_category_model');
		$data['business_cats'] = $this->Business_category_model->getCategories();
		$data['main'] = 'users/register';
		$this->load->view('template/template', $data);
	}

	public function process_registration()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('surname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('business_name', 'Business Name', 'required');

		if($this->form_validation->run() == FALSE) {

		} else {
			# create new user

			# send welcome email

			# send to gocardless
		}
	}
}

