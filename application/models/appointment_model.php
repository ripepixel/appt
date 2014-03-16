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



}