<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Setting_model');
		$this->User_model->isLoggedIn();
	}



	public function index()
	{
		// if has business details - show edit page - else show create page
		if($this->Setting_model->hasBusinessDetails($this->session->userdata('user_id'))) {
			$data['bd'] = $this->Setting_model->getBusinessDetails($this->session->userdata('user_id'));
			$data['main'] = 'settings/edit_business_details';
		} else {
			$data['main'] = 'settings/index';	
		}
		
		$this->load->view('back_template/template', $data);
	}

	public function save_business_details()
	{
		$data = array(
			'user_id' => $this->session->userdata('user_id'),
			'street' => $this->input->post('street'),
			'town' => $this->input->post('town'),
			'county' => $this->input->post('county'),
			'postcode' => $this->input->post('postcode'),
			'country_id' => $this->input->post('country'),
			'telephone' => $this->input->post('telephone'),
			'public_email' => $this->input->post('public_email'),
			'website' => prep_url($this->input->post('website')),
			'facebook' => prep_url($this->input->post('facebook')),
			'twitter' => prep_url($this->input->post('twitter')),
			);
		$this->Setting_model->saveBusinessDetails($data);

		$this->session->set_flashdata('success', 'Your business details have been saved.');
		redirect('settings/');
	}

	public function update_business_details()
	{
		$data = array(
			'street' => $this->input->post('street'),
			'town' => $this->input->post('town'),
			'county' => $this->input->post('county'),
			'postcode' => $this->input->post('postcode'),
			'country_id' => $this->input->post('country'),
			'telephone' => $this->input->post('telephone'),
			'public_email' => $this->input->post('public_email'),
			'website' => prep_url($this->input->post('website')),
			'facebook' => prep_url($this->input->post('facebook')),
			'twitter' => prep_url($this->input->post('twitter')),
			);
		$this->Setting_model->updateBusinessDetails($this->session->userdata('user_id'), $data);

		$this->session->set_flashdata('success', 'Your business details have been updated.');
		redirect('settings/');
	}

	public function opening_hours()
	{
		# business opening hours
		// check if already created hours - if yes show edit - else show new
		$has_hours = $this->Setting_model->hasBusinessHours($this->session->userdata('user_id'));
		if($has_hours) {
			$data['hours'] = $this->Setting_model->getBusinessHours($this->session->userdata('user_id'));
			$data['main'] = 'settings/edit_opening_hours';
			$this->load->view('back_template/template', $data);
		} else {
			$data['main'] = 'settings/opening_hours';
			$this->load->view('back_template/template', $data);	
		}
		
	}

	public function save_opening_hours()
	{
		$data = array(
			'user_id' => $this->session->userdata('user_id'),
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
		$this->Setting_model->saveBusinessHours($data);

		$this->session->set_flashdata('success', 'Your business opening hours have been saved.');
		redirect('settings/opening_hours');
	}

	public function update_opening_hours()
	{
		$data = array(
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
		$this->Setting_model->updateBusinessHours($this->session->userdata('user_id'), $data);

		$this->session->set_flashdata('success', 'Your business opening hours have been updated.');
		redirect('settings/opening_hours');
	}
	
	public function emails()
	{
		$data['main'] = 'settings/emails';	
		$this->load->view('back_template/template', $data);
	}
	
	
}

