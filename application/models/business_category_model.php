<?php

class Business_category_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    function getCategories()
    {
    	$this->db->order_by('name', 'ASC');
    	$q = $this->db->get('business_categories');

    	return $q->result_array();
    }

}