<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointments extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->User_model->isLoggedIn();
		$this->load->model('Appointment_model');
	}


	public function index()
	{
		// get user appointments for today
		//$data['appointments'] = $this->Blog_model->getPublishedPosts();
		$data['service_cats'] = $this->General_model->getAllServiceCategories($this->session->userdata('user_id'));
		$data['main'] = 'appointments/index';
		$this->load->view('back_template/template', $data);
	}

	












	public function get_services_by_category()
	{
		$catID = $this->input->post('queryString');
		$services = $this->General_model->getAllServicesByCategory($catID, $this->session->userdata('user_id'));
		echo "<option value=''>-- Choose Service --</option>";
		foreach($services as $service) {
			echo "<option value='".$service['id']."'>".$service['name']."</option>";
		}
	}
	
	public function get_staff_for_service()
	{
		$servID = $this->input->post('queryString');
		$staff = $this->General_model->getAllStaffForService($servID);
		echo "<option value=''>-- Choose Staff --</option>";
		foreach($staff as $stf) {
			echo "<option value='".$stf['id']."'>".$stf['first_name']." ".$stf['last_name']."</option>";
		}
	}
	
	public function get_available_appointments()
	{
		$serviceID = $_POST['serviceID'];
		$staffID = $_POST['staffID'];
		$chosenDate = $_POST['chosenDate'];
		
		// get duration of service
		$this->load->model('Service_model');
		$service = $this->Service_model->getBusinessService($this->session->userdata('user_id'), $serviceID);
		
		// get appointments for staff on chosen date
		$appts = $this->Appointment_model->getStaffAppointmentsForDate($staffID, date('Y-m-d', strtotime($chosenDate)));
		// get staff working times
		$this->load->model('Staff_model');
		$hours = $this->Staff_model->getStaffHoursForDay($staffID, $chosenDate);
		$i = $hours->open;
		while($i < $hours->close) {
			echo "<p>".$i."</p>";
			$i+15;
		}
	}

}