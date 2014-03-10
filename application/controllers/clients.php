<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->User_model->isLoggedIn();
		$this->load->model('Client_model');
		$this->load->model('Client_note_model');
		$this->load->model('Staff_model');
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
		$er = ($this->input->post('email_reminders') == 'on') ? 1 : 0;
		$me = ($this->input->post('marketing_emails') == 'on') ? 1 : 0;
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
			'email_reminders' => $er,
			'marketing_emails' => $me
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
		$er = ($this->input->post('email_reminders') == 'on') ? 1 : 0;
		$me = ($this->input->post('marketing_emails') == 'on') ? 1 : 0;
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'telephone' => $this->input->post('telephone'),
			'mobile' => $this->input->post('mobile'),
			'address' => $this->input->post('address'),
			'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
			'gender' => $this->input->post('gender'),
			'email_reminders' => $er,
			'marketing_emails' => $me
			);

		$client = $this->Client_model->updateClient($this->input->post('client_id'), $data);
		
		$this->session->set_flashdata('success', 'Your client has been updated successfully.');
		redirect('clients/');
	}
	
	public function show()
	{
		$client = $this->Client_model->getClient($this->uri->segment(3), $this->session->userdata('user_id'));
		if($client) {
			$data['client'] = $client;
			$data['client_notes'] = $this->Client_note_model->getClientNotes($client->id);
			$data['main'] = 'clients/show';
			$this->load->view('back_template/template', $data);
		} else {
			$this->session->set_flashdata('error', "You don't have permission to access that client.");
			redirect('clients/');
		}
	}
	
	
	function filter_clients(){
	    $term = $this->input->post('queryString');
	    $clients = $this->Client_model->getFilteredClients($term);
	    foreach($clients as $client) {
	    	echo "<li id='".$client['id']."'><a href='".base_url()."clients/show/".$client['id']."'>".$client['first_name']." ".$client['last_name']."</a></li>";
	    }
	    
	}

	function add_note()
	{
		$data = array(
			'client_id' => $this->input->post('client_id'),
			'staff_id' => 1,
			'note' => $this->input->post('client_note'),
			'created_at' => date('Y-m-d H:i:s', time())
			);
		$this->Client_note_model->addNote($data);
	}

	function delete_note()
	{
		$nid = $this->uri->segment(3);
		$this->Client_note_model->deleteNote($nid);
	}

	function get_notes()
	{
		$cid = $this->uri->segment(3);
		
		$client_notes = $this->Client_note_model->getClientNotes($cid);
		if($client_notes) {
			foreach($client_notes as $cn) {
				$staff = $this->Staff_model->getStaffMember($cn['staff_id'], $this->session->userdata('user_id'));
				echo "<div class='the-note'>";
				echo "<p>".nl2br($cn['note'])."</p>";
				echo "<small>Added by: ".$staff->first_name. " ".$staff->last_name." on ". date('d/m/Y H:i A', strtotime($cn['created_at']))." <a id='del-note' rel2='".$cn['client_id']."' rel='".$cn['id']."' class='btn btn-xs btn-danger'>Delete</a></small>";
				echo "</div>";
			}
		} else {
			echo "<p>The client has no notes to view.</p>";
		}
	}
	
	
}

