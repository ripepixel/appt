<?php

class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    function createUser($data)
    {
    	$this->db->insert('users', $data);
			return $this->db->insert_id();
    }

    function validateUser($email, $pass)
    {
    	$this->db->where('email', $email);
    	$this->db->where('password', $pass);
    	$this->db->where('is_active', 1);
    	$q = $this->db->get('users');
    	if($q->num_rows() == 1) {
    		return $q->row();
    	} else {
    		return FALSE;
    	}
    }

    function isLoggedIn()
    {
    	if(!$this->session->userdata('user_id')) {
    		redirect('users/signin');
    	}
    }

}