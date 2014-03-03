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
			# create new user - set as inactive
			$sec_pass = md5($this->input->post('password'));
			$data = array(
				'email' => $this->input->post('email'),
				'password' => $sec_pass,
				'first_name' => $this->input->post('first_name'),
				'surname' => $this->input->post('surname'),
				'business_name' => $this->input->post('business_name'),
				'business_category_id' => $this->input->post('business_category'),
				'plan_id' => $this->input->post('plan_id'),
				'is_active' => 0				
			);
			$this->load->model('User_model');
			$new_user = $this->User_model->createUser($data);
			if($new_user) {
				# send welcome email
				
				# send to goCardless for payment details
				/*$this->load->model('Plan_model');
				$plan = $this->Plan_model->getPlanDetails($this->input->post('plan_id'));
				$gc_data = array(
					'amount' => '19.99',
					'interval_length' => 1,
					'interval_unit' => 'month',
					'name' => $plan->name,
					'description' => $plan->details,
					'start_at' => date("Y-m-d", time() + 2592000),
					'user' => array(
							'first_name' => $this->input->post('first_name'),
							'last_name' => $this->input->post('surname'),
							'company_name' => $this->input->post('business_name'),
							'email' => $this->input->post('email')
						)
				);
				$this->config->load('gocardless');
				$this->load->spark('gocardless/0.4.1'); */
				redirect('users/payment_successful');
			} else {
				// error creating user
			}

		}
		
	}
	
	public function payment_failed()
	{
		# code...
	}
	
	public function payment_successful()
	{
		// if payment successful
		// get user details, set active = 1, set session data, redirect to their dashboard
		$this->session->set_flashdata('success', 'Great you have now been signed up.');
		redirect('pages/');
	}
	
	
	
}

