<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model');
	}



	public function index()
	{
		$data['posts'] = $this->Blog_model->getPublishedPosts();
		$data['main'] = 'blog/index';
		$this->load->view('template/template', $data);
	}

	public function blog_post()
	{
		$post = $this->Blog_model->getBlogPost($this->uri->segment(3));
		if($post) {
			$data['post'] = $post;
			$data['main'] = 'blog/post';
			$this->load->view('template/template', $data);
		} else {
			redirect('blog/index');
		}
		
	}

	



}