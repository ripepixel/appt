<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->User_model->isLoggedIn();
		$this->load->model('Service_model');
	}

	public function index()
	{
		# business services list
		$data['services'] = $this->Service_model->getBusinessServices($this->session->userdata('user_id'));
		$data['service_cats'] = $this->Service_model->getBusinessServiceCategories($this->session->userdata('user_id'));
		$data['main'] = 'services/index';
		$this->load->view('back_template/template', $data);
	}

	public function create()
	{
		# check if has service categories first
		$has_cats = $this->Service_model->businessHasServiceCategories($this->session->userdata('user_id'));
		if(!$has_cats) {
			$this->session->set_flashdata('error', 'Please add your service categories first. You need at least one.');
			redirect('services/create_service_category');
		} else {
			$this->load->model('Staff_model');
			$data['main'] = 'services/create';
			$this->load->view('back_template/template', $data);
		}
	}

	public function save_service()
	{
		// create service
		$data = array(
			'user_id' => $this->session->userdata('user_id'),
			'service_category_id' => $this->input->post('service_cat'),
			'name' => $this->input->post('name'),
			'details' => $this->input->post('details'),
			'cost' => $this->input->post('cost'),
			'sell' => $this->input->post('sell'),
			'duration' => $this->input->post('duration'),
			);
		$sid = $this->Service_model->saveService($data);


		// create staff services
		$staff = $this->input->post('staff');
		print_r($staff);
		foreach($staff as $key => $value) {
			if($value == 'on') {
				$data = array(
					'service_id' => $sid,
					'staff_id' => $key
					);
				$this->Service_model->saveStaffServices($data);
			}
		}


		$this->session->set_flashdata('success', 'Your new service has been added.');
		redirect('services/');

	}

	public function edit()
	{
		# check if belongs to this business
		$service = $this->Service_model->getBusinessService($this->session->userdata('user_id'), $this->uri->segment(3));
		if(!$service) {
			$this->session->set_flashdata('error', 'You do not have access to that service.');
			redirect('services/');
		} else {
			$this->load->model('Staff_model');
			$data['staff'] = $this->Staff_model->getAllStaff($this->session->userdata('user_id'));
			$data['service'] = $service;
			$data['service_staff'] = $this->Service_model->getStaffForService($this->uri->segment(3));
			$data['main'] = 'services/edit';
			$this->load->view('back_template/template', $data);
		}
	}









	/* Service Categories */

	public function create_service_category()
	{
		$data['main'] = 'services/create_service_category';
		$this->load->view('back_template/template', $data);
	}


	public function save_service_category()
	{
		// check if already exists
		$this->form_validation->set_rules('name', 'Category Name', 'required|callback_cat_name_used');

		if($this->form_validation->run() == FALSE) {
			$data['main'] = 'services/create_service_category';
			$this->load->view('back_template/template', $data);
		} else {
			$this->Service_model->saveServiceCategory($this->input->post('name'), $this->session->userdata('user_id'));
			$this->session->set_flashdata('success', 'The service category has been saved.');
			redirect('services');	
		}
		
	}

	// callback function for save_service_category
	function cat_name_used($str)
	{
		$cn = $this->Service_model->getServiceCategoryByName($str);
		if($cn) {
			$this->form_validation->set_message('cat_name_used', 'That category name already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}


}