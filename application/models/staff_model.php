<?php

class Staff_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    function getAllStaff($uid)
    {
    	$this->db->where('user_id', $uid);
    	$this->db->order_by('first_name', 'ASC');
    	$q = $this->db->get('staff');
    	if($q->num_rows() > 0) {
    		return $q->result_array();
    	} else {
    		return FALSE;
    	}
    }

    function getStaffMember($sid, $uid)
    {
    	$this->db->where('id', $sid);
    	$this->db->where('user_id', $uid);
    	$q = $this->db->get('staff');
    	if($q->num_rows() == 1) {
    		return $q->row();
    	} else {
    		return FALSE;
    	}
    }



    function saveStaff($data)
    {
    	$this->db->insert('staff', $data);
    	return $this->db->insert_id();
    }

    function updateStaff($sid, $data)
    {
    	$this->db->where('id', $sid);
    	$this->db->update('staff', $data);
    	return TRUE;
    }

    function getStaffHours($sid)
    {
    	$this->db->where('staff_id', $sid);
    	$q = $this->db->get('staff_hours');
    	return $q->row();

    }

		function getStaffHoursForDay($sid, $date)
		{
			// get day from date
			$day = date('l', strtotime($date));
			
			switch($day) {
				case 'Sunday':
				$this->db->select('sun_open AS open, sun_close AS close');
				break;
				case 'Monday':
				$this->db->select('mon_open AS open, mon_close AS close');
				break;
				case 'Tuesday':
				$this->db->select('tues_open AS open, tues_close AS close');
				break;
				case 'Wednesday':
				$this->db->select('wed_open AS open, wed_close AS close');
				break;
				case 'Thursday':
				$this->db->select('thurs_open AS open, thurs_close AS close');
				break;
				case 'Friday':
				$this->db->select('fri_open AS open, fri_close AS close');
				break;
				case 'Saturday':
				$this->db->select('sat_open AS open, sat_close AS close');
				break;
			}
			
			$this->db->where('staff_id', $sid);
			$q = $this->db->get('staff_hours');
			return $q->row();
		}

    function saveStaffHours($data)
    {
    	$this->db->insert('staff_hours', $data);
    	return TRUE;
    }

    function updateStaffHours($sid, $data)
    {
    	$this->db->where('staff_id', $sid);
    	$this->db->update('staff_hours', $data);
    	return TRUE;
    }

    function displayStaffHours($hours)
    {
        if($hours == "00:00:00") {
            echo "OFF";
        } else {
            echo date('H:i', strtotime($hours));
        }
    }

}