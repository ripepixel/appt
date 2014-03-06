<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function signup()
	{
		// pricing page
		$data['main'] = 'users/signup';
		$this->load->view('template/template', $data);
	}

	public function signin()
	{
		// login page
		$data['main'] = 'users/signin';
		$this->load->view('template/template', $data);
	}

	public function process_signin($value='')
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == FALSE) {
			$data['main'] = 'users/signin';
			$this->load->view('template/template', $data);
		} else {
			$sec_pass = md5($this->input->post('password'));
			$this->load->model('User_model');
			$validated = $this->User_model->validateUser($this->input->post('email'), $sec_pass);
			if($validated) {
				// logged in OK, set session, send to dashboard
				$data = array(
					'user_id' => $validated->id,
					'first_name' => $validated->first_name,
					'surname' => $validated->surname,
					'business_name' => $validated->business_name
					);
				$this->session->set_userdata($data);
				$this->session->set_flashdata('success', 'Signed in successfully :)');
				redirect('dashboard/');
			} else {
				// problem with email or password
				$this->session->set_flashdata('error', 'There was a problem with your email or password. Please check and try again.');
				redirect('users/signin');
			}
		}
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

			// create staff user
			$this->load->model('Staff_model');
			$data_staff = array(
				'user_id' => $new_user,
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('surname'),
				'email' => $this->input->post('email'),
				'password' => $sec_pass,
				'is_manager' => 1
				);
			$staff = $this->Staff_model->saveStaff($data);
			// create staff hours - default times 9-5 closed weekends
			$data_hours = array(
				'staff_id' => $staff,
				'mon_open' => "09:00",
				'mon_close' => "17:00",
				'tues_open' => "09:00",
				'tues_close' => "17:00",
				'wed_open' => "09:00",
				'wed_close' => "17:00",
				'thurs_open' => "09:00",
				'thurs_close' => "17:00",
				'fri_open' => "09:00",
				'fri_close' => "17:00",
				'sat_open' => "00:00",
				'sat_close' => "00:00",
				'sun_open' => "00:00",
				'sun_close' => "00:00"
				);
			$this->Staff_model->saveStaffHours($data_hours);
			
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

	public function signout()
	{
		$this->session->sess_destroy();
		redirect('pages/');
	}
	
	public function payment_failed()
	{
		# code...
	}
	
	public function payment_successful()
	{
		// if payment successful
		// get user details, set active = 1, set session data, redirect to their dashboard
		$this->session->set_flashdata('success', 'Great you have now been signed up. Please log in to get started.');
		redirect('pages/');
	}
	
	
	
}

