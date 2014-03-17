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

	
	public function create_appointment()
	{
		$client = $this->input->post('client_id');
		$service = $this->input->post('service');
		$staff = $this->input->post('staff');
		$date = date("Y-m-d", strtotime($this->input->post('appointment_date')));
		$time = $this->input->post('time');
		$deposit = $this->input->post('deposit');


		// get service duration for end time
		$this->load->model('Service_model');
		$service = $this->Service_model->getBusinessService($this->session->userdata('user_id'), $service);
		$end_time =  new DateTime("{$time} + {$service->duration} mins");

		if($deposit == '') {
			$deposit = "0.00";
		}
		if($deposit == $service->sell) {
			$status = 'paid';
		} else {
			$status = 'active';
		}

		$data = array(
			'user_id' => $this->session->userdata('user_id'),
			'staff_id' => $staff,
			'client_id' => $client,
			'date' => $date,
			'start_time' => $time,
			'end_time' => $end_time->format('H:i:s'),
			'service_name' => $service->name,
			'price' => $service->sell,
			'deposit_amount' => $deposit,
			'status' => $status
			);

		$this->Appointment_model->createAppointment($data);
		$this->session->set_flashdata('success', 'Great, your new appointment has been created');
		redirect('appointments');
	}











	public function get_services_by_category()
	{
		$catID = $this->input->post('queryString');
		$services = $this->General_model->getAllServicesByCategory($catID, $this->session->userdata('user_id'));
		echo "<option value=''>-- Choose Service --</option>";
		foreach($services as $service) {
			echo "<option value='".$service['id']."'>".$service['name']." &pound;".$service['sell']."</option>";
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
		
		$open = new DateTime($hours->open);
		// last time is close time - duration
		$close = new DateTime("{$hours->close} - {$service->duration} mins");
		$interval = DateInterval::createFromDateString('15 min');
		$times    = new DatePeriod($open, $interval, $close);

		echo "<div class='col-lg-12'><h4>Available Times</h4></div>";
		for($time = $open; $time < $close; $time->add($interval)) {
			if($appts) {
				foreach($appts as $app) {
					if($app['start_time'] == $time->format('H:i:s')) {
						$interval = DateInterval::createFromDateString($service->duration.' min');
						$time = new DateTime($app['end_time']);
					} else {
						$interval = DateInterval::createFromDateString('15 min');
					}
				}
			} else {
				$interval = DateInterval::createFromDateString('15 min');
			}
			echo "<div class='col-lg-3'><input type='checkbox' name='time' id='time' value='".$time->format('H:i:s')."' />".$time->format('H:i')."</div>";
		}

		

	}

}