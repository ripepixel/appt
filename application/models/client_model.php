<?php

class Client_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    function getAllClients($uid)
    {
    	$this->db->where('user_id', $uid);
    	$this->db->order_by('first_name', 'ASC');
    	$q = $this->db->get('clients');
    	if($q->num_rows() > 0) {
    		return $q->result_array();
    	} else {
    		return FALSE;
    	}
    }

		function getFilteredClients($term)
    {
    	$this->db->where('user_id', $this->session->userdata('user_id'));
			$this->db->like('first_name', $term);
			$this->db->like('last_name', $term);
    	$this->db->order_by('first_name', 'ASC');
    	$q = $this->db->get('clients');
    	if($q->num_rows() > 0) {
    		return $q->result_array();
    	} else {
    		return FALSE;
    	}
    }
		
		function saveClient($data)
    {
    	$this->db->insert('clients', $data);
    	return $this->db->insert_id();
    }

		function getClient($cid, $uid)
    {
    	$this->db->where('id', $cid);
    	$this->db->where('user_id', $uid);
    	$q = $this->db->get('clients');
    	if($q->num_rows() == 1) {
    		return $q->row();
    	} else {
    		return FALSE;
    	}
    }

		function updateClient($cid, $data)
    {
    	$this->db->where('id', $cid);
    	$this->db->update('clients', $data);
    	return TRUE;
    }

		/*
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

    

    function getStaffHours($sid)
    {
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
    } */

}