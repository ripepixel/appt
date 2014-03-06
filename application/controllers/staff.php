<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->User_model->isLoggedIn();
		$this->load->model('Staff_model');
	}



	public function index()
	{
		$data['staff'] = $this->Staff_model->getAllStaff($this->session->userdata('user_id'));
		$data['main'] = 'staff/index';	
		$this->load->view('back_template/template', $data);
	}

	public function create()
	{
		//$this->load->model('Setting_model');
		//$data['hours'] = $this->Setting_model->getBusinessHours($this->session->userdata('user_id'));
		$data['main'] = 'staff/new';	
		$this->load->view('back_template/template', $data);
	}

	public function save_staff()
	{
		// check for data - Email is unique
		// generate random password and email to staff
		// add allow_access to staff table and add to form if want to enable log on

		$data = array(
			'user_id' => $this->session->userdata('user_id'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'telephone' => $this->input->post('telephone'),
			'mobile' => $this->input->post('mobile'),
			'address' => $this->input->post('address'),
			'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
			'gender' => $this->input->post('gender'),
			);

		$staff = $this->Staff_model->saveStaff($data);

		// save hours
		$hour_data = array(
			'staff_id' => $staff,
			'mon_open' => $this->input->post('mon_open'),
			'mon_close' => $this->input->post('mon_close'),
			'tues_open' => $this->input->post('tues_open'),
			'tues_close' => $this->input->post('tues_close'),
			'wed_open' => $this->input->post('wed_open'),
			'wed_close' => $this->input->post('wed_close'),
			'thurs_open' => $this->input->post('thurs_open'),
			'thurs_close' => $this->input->post('thurs_close'),
			'fri_open' => $this->input->post('fri_open'),
			'fri_close' => $this->input->post('fri_close'),
			'sat_open' => $this->input->post('sat_open'),
			'sat_close' => $this->input->post('sat_close'),
			'sun_open' => $this->input->post('sun_open'),
			'sun_close' => $this->input->post('sun_close')
			);

		$this->Staff_model->saveStaffHours($hour_data);

		$this->session->set_flashdata('success', 'Yay, a new staff member has been added.');
		redirect('staff/');
	}

	public function edit()
	{
		$staff = $this->Staff_model->getStaffMember($this->uri->segment(3), $this->session->userdata('user_id'));
		if($staff) {
			$data['staff'] = $staff;
			$data['hours'] = $this->Staff_model->getStaffHours($staff->id);
			$data['main'] = 'staff/edit';	
			$this->load->view('back_template/template', $data);
		} else {
			// staff does not exist or for wrong user
			$this->session->set_flashdata('error', 'There was a problem getting the staff details.');
			redirect('staff/');
		}
		
	}

	public function update_staff()
	{
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'telephone' => $this->input->post('telephone'),
			'mobile' => $this->input->post('mobile'),
			'address' => $this->input->post('address'),
			'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
			'gender' => $this->input->post('gender'),
			);

		$staff = $this->Staff_model->updateStaff($this->input->post('staff_id'), $data);

		// save hours
		$hour_data = array(
			'mon_open' => $this->input->post('mon_open'),
			'mon_close' => $this->input->post('mon_close'),
			'tues_open' => $this->input->post('tues_open'),
			'tues_close' => $this->input->post('tues_close'),
			'wed_open' => $this->input->post('wed_open'),
			'wed_close' => $this->input->post('wed_close'),
			'thurs_open' => $this->input->post('thurs_open'),
			'thurs_close' => $this->input->post('thurs_close'),
			'fri_open' => $this->input->post('fri_open'),
			'fri_close' => $this->input->post('fri_close'),
			'sat_open' => $this->input->post('sat_open'),
			'sat_close' => $this->input->post('sat_close'),
			'sun_open' => $this->input->post('sun_open'),
			'sun_close' => $this->input->post('sun_close')
			);

		$this->Staff_model->updateStaffHours($this->input->post('staff_id'), $hour_data);

		$this->session->set_flashdata('success', 'Your staff member has been updated.');
		redirect('staff/');
	}

	
}

