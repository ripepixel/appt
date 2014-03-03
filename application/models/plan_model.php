<?php

class Plan_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    function getPlanDetails($pid)
    {
    	$this->db->where('id', $pid);
			$q = $this->db->get('plans');
			return $q->row();
    }

}