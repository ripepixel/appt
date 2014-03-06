<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->User_model->isLoggedIn();
		$this->load->model('Client_model');
	}



	public function index()
	{
		$data['clients'] = $this->Client_model->getAllClients($this->session->userdata('user_id'));
		$data['main'] = 'clients/index';
		$this->load->view('back_template/template', $data);
	}

	public function create()
	{
		$data['main'] = 'clients/new';
		$this->load->view('back_template/template', $data);
	}
	
	public function save_client()
	{
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

		$client = $this->Client_model->saveClient($data);
		
		$this->session->set_flashdata('success', 'Your client has been added successfully.');
		redirect('clients/');
	}
	
	
	public function edit()
	{
		$client = $this->Client_model->getClient($this->uri->segment(3), $this->session->userdata('user_id'));
		if($client) {
			$data['client'] = $client;
			$data['main'] = 'clients/edit';
			$this->load->view('back_template/template', $data);
		} else {
			$this->session->set_flashdata('error', "You don't have permission to access that client.");
			redirect('clients/');
		}
		
	}
	
	public function update_client()
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

		$client = $this->Client_model->updateClient($this->input->post('client_id'), $data);
		
		$this->session->set_flashdata('success', 'Your client has been updated successfully.');
		redirect('clients/');
	}
	
	function show()
	{
		$client = $this->Client_model->getClient($this->uri->segment(3), $this->session->userdata('user_id'));
		if($client) {
			$data['client'] = $client;
			$data['main'] = 'clients/show';
			$this->load->view('back_template/template', $data);
		} else {
			$this->session->set_flashdata('error', "You don't have permission to access that client.");
			redirect('clients/');
		}
	}
	
	
	function filter_clients(){
	    $term = $this->input->get('term', TRUE);
	    $clients = $this->Client_model->getFilteredClients($term);
	    echo json_encode($clients);
	}
	
	
}

