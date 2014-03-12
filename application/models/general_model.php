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