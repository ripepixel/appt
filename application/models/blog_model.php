<?php

class Blog_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    function getPublishedPosts()
    {
    	$this->db->where('is_draft', 0);
    	$this->db->order_by('date_posted', 'DESC');
    	$q = $this->db->get('blog_posts');

    	return $q->result_array();
    }

    function getBlogPost($id)
    {
    	$this->db->where('id', $id);
    	$this->db->where('is_draft', 0);
    	$q = $this->db->get('blog_posts');

    	return $q->row();
    }

}