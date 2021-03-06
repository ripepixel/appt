<?php

class General_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    function getBusinessCurrency($uid)
    {
    	$this->db->where('user_id', $uid);
    	$q = $this->db->get('business_details');
    	$row = $q->row();

    	$this->db->where('id', $row->country_id);
    	$q2 = $this->db->get('countries');
    	$row2 = $q2->row();

    	return $row2;
    }


    function convertDuration($mins)
    {
    	if($mins < 60) {
    		$duration = $mins. " mins";
    	} else {
    		$hours = floor($mins / 60);
    		$min = $mins - ($hours * 60);
    		$hrs_txt = ($hours == 1) ? " Hour " : " Hours ";
    		$mins_txt = ($min > 0) ? $min." mins" : "";
    		$duration = $hours. $hrs_txt. $mins_txt;
    	}

    	return $duration;
    }

		function getAllServiceCategories($uid)
		{
			$this->db->where('user_id', $uid);
			$q = $this->db->get('service_categories');
			return $q->result_array();
		}
		
		function getAllServices($uid)
		{
			$this->db->where('user_id', $uid);
			$q = $this->db->get('services');
			return $q->result_array();
		}
		
		function getAllServicesByCategory($cat_id, $uid)
		{
			$this->db->where('user_id', $uid);
			$this->db->where('service_category_id', $cat_id);
			$q = $this->db->get('services');
			return $q->result_array();
		}
		
		function getAllStaffForService($serv_id)
		{
			$this->db->where('service_id', $serv_id);
			$q = $this->db->get('staff_services');
			$result = $q->result_array();
			
			foreach($result as $res) {
				$this->db->where('id', $res['staff_id']);
				$q = $this->db->get('staff');
				$row = $q->row();
				$data[] = array(
					'id' => $row->id,
					'first_name' => $row->first_name,
					'last_name' => $row->last_name
				);
			}
			return $data;
		}

    // search multidimensional array
    function findNeedleInHaystack($haystack, $needle, $what)
    {
        foreach($haystack as $key => $value) {
            if($value[$what] === $needle) {
                return TRUE;
            }
        }
        return FALSE;
    }

}