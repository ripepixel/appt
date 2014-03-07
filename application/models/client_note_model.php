<?php

class Client_note_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    function getClientNotes($cid)
    {
        $this->db->where('client_id', $cid);
        $this->db->order_by('created_at', "DESC");
        $q = $this->db->get('client_notes');
        if($q->num_rows() > 0) {
            return $q->result_array();
        } else {
            return FALSE;
        }
    }

    function addNote($data)
    {
        $this->db->insert('client_notes', $data);
        return TRUE;
    }

    function deleteNote($nid)
    {
        $this->db->where('id', $nid);
        $this->db->delete('client_notes');
        return TRUE;
    }

}