<?php

class Service_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    function businessHasServiceCategories($uid)
    {
    	# checck if a business has any service categories
    	$this->db->where('user_id', $uid);
    	$q = $this->db->get('service_categories');
    	if($q->num_rows() > 0) {
    		return TRUE;
    	} else {
    		return FALSE;
    	}
    }

    function getBusinessServices($uid)
    {
    	$this->db->where('user_id', $uid);
    	$this->db->order_by('name', 'ASC');
    	$q = $this->db->get('services');
    	if($q->num_rows() > 0) {
    		return $q->result_array();
    	} else {
    		return FALSE;
    	}
    }

    function getBusinessService($uid, $sid)
    {
    	$this->db->where('id', $sid);
    	$this->db->where('user_id', $uid);
    	$q = $this->db->get('services');
    	if($q->num_rows() > 0) {
    		return $q->row();
    	} else {
    		return FALSE;
    	}
    }

    function getBusinessServiceCategories($uid)
    {
    	$this->db->where('user_id', $uid);
    	$this->db->order_by('name', 'ASC');
    	$q = $this->db->get('service_categories');
    	if($q->num_rows() > 0) {
    		return $q->result_array();
    	} else {
    		return FALSE;
    	}
    }

    function getServiceCategoryName($sid)
    {
    	$this->db->where('id', $sid);
    	$q = $this->db->get('services');
    	$row = $q->row();

    	$this->db->where('id', $row->service_category_id);
    	$q2 = $this->db->get('service_categories');
    	$row2 = $q2->row();

    	return $row2->name;
    }

		function getServiceCountForCategory($sid, $uid)
		{
			$this->db->where('service_category_id', $sid);
			$this->db->where('user_id', $uid);
			$q = $this->db->get('services');
			return $q->num_rows();
		}

    function getServiceCategoryByName($name)
    {
    	$this->db->where('name', $name);
    	$q = $this->db->get('service_categories');
    	if($q->num_rows() > 0) {
    		return TRUE;
    	} else {
    		return FALSE;
    	}
    }

    function saveServiceCategory($name, $uid)
    {
    	$data = array(
    		'user_id' => $uid,
    		'name' => $name
    		);

    	$this->db->insert('service_categories', $data);

    	return TRUE;
    }

    function saveService($data)
    {
    	$this->db->insert('services', $data);
    	return $this->db->insert_id();
    }

		function updateService($sid, $data)
		{
			$this->db->where('id', $sid);
			$this->db->update('services', $data);
			return TRUE;
		}





    function saveStaffServices($data)
    {
    	$this->db->insert('staff_services', $data);
    	return TRUE;
    }

    function getStaffIdForService($sid)
    {
    	# get all staff for a given service
    	$this->db->select('staff_id');
    	$this->db->where('service_id', $sid);
    	$q = $this->db->get('staff_services');
    	return $q->result_array();
    }

    function getStaffForService($sid)
    {
    	# get all staff for a given service
    	$this->db->where('service_id', $sid);
    	$q = $this->db->get('staff_services');
    	return $q->result_array();
    }

		function deleteStaffServicesByService($sid)
		{
			$this->db->where('service_id', $sid);
			$q = $this->db->get('staff_services');
			$staff_services = $q->result_array();
			
			foreach($staff_services as $ss) {
				$this->db->where('id', $ss['id']);
				$this->db->delete('staff_services');
			}
		}

}