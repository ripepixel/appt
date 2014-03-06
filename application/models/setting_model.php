<?php

class Setting_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    function hasBusinessHours($uid)
    {
        $this->db->where('user_id', $uid);
        $q = $this->db->get('business_hours');
        if($q->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getBusinessHours($uid)
    {
        $this->db->where('user_id', $uid);
        $q = $this->db->get('business_hours');
        return $q->row();
    }

    function saveBusinessHours($data)
    {
        $this->db->insert('business_hours', $data);
        return TRUE;
    }

    function updateBusinessHours($uid, $data)
    {
        $this->db->where('user_id', $uid);
        $this->db->update('business_hours', $data);
        return TRUE;
    }

    function getCountries()
    {
        $this->db->order_by('name', 'ASC');
        $q = $this->db->get('countries');
        return $q->result_array();
    }

    function hasBusinessDetails($uid)
    {
        $this->db->where('user_id', $uid);
        $q = $this->db->get('business_details');
        if($q->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getBusinessDetails($uid)
    {
        $this->db->where('user_id', $uid);
        $q = $this->db->get('business_details');
        return $q->row();
    }

    function saveBusinessDetails($data)
    {
        $this->db->insert('business_details', $data);
        return TRUE;
    }

    function updateBusinessDetails($uid, $data)
    {
        $this->db->where('user_id', $uid);
        $this->db->update('business_details', $data);
        return TRUE;
    }

}