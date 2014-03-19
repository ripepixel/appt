<?php

class Appointment_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


		function getStaffAppointmentsForDate($staff_id, $date)
		{
			$this->db->where('staff_id', $staff_id);
			$this->db->where('date', $date);
			$q = $this->db->get('appointments');
			if($q->num_rows() > 0) {
				return $q->result_array();
			} else {
				return FALSE;
			}
		}

		function getAppointments($uid)
		{
			$this->db->where('user_id', $uid);
			$q = $this->db->get('appointments');
			if($q->num_rows() > 0) {
				return $q->result_array();
			} else {
				return FALSE;
			}
		}

		function getAppointment($id, $uid)
		{
			$this->db->where('id', $id);
			$this->db->where('user_id', $uid);
			$q = $this->db->get('appointments');
			if($q->num_rows() == 1) {
				return $q->row();
			} else {
				return FALSE;
			}
		}

		function createAppointment($data)
		{
			$this->db->insert('appointments', $data);
			return TRUE;
		}



}