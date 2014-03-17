<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->User_model->isLoggedIn();
	}



	public function index()
	{		
		$data['main'] = 'dashboard/index';
		$this->load->view('back_template/template', $data);
	}

	
	
	function get_appointments()
	{
		$this->load->model('Appointment_model');
		$appts = $this->Appointment_model->getAppointments($this->session->userdata('user_id'));

		foreach ($appts as $appt) {
			$this->load->model('Client_model');
			$client = $this->Client_model->getClient($appt['client_id'], $this->session->userdata('user_id'));
			$jsonevents[] = array(
				'id' => $appt['id'],
				'title' => $appt['service_name']."\n Client: ".$client->first_name." ".$client->last_name,
				'start' => $appt['date']."T".$appt['start_time'],
				'end' => $appt['date']."T".$appt['end_time'],
				'allDay' => ''
				);
		}

		echo json_encode($jsonevents);
	}
	
}

