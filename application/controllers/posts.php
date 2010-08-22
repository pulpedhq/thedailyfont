<?php

class Posts extends Controller {
	
	function index()
	{
		
		$data['title'] = 'Welcome to The Daily Font!';
		
		//Loads posts model and retrieves all posts corresponding to ID
		
		$data['row'] = $this->posts_model->getPost();
		
		//Loads comments model and retrieves all comments corresponding to ID
		
		$data['comments'] = $this->comments_model->getComments();
		
		$this->load->view('includes/header', $data);
		
		$this->load->view('post', $data);
		
		$this->load->view('includes/footer');
	}
	
	function new_comment()
	{
		
		$format = 'DATE_ATOM';
		
		$time = time();
		
		$data['name'] = $this->input->post('name');
		
		$data['post_id'] = $this->input->post('post_id');
		
		$post_id = $this->input->post('post_id');
		
		$data['comment'] = $this->input->post('comment');
		
		$data['posted_datetime'] = standard_date($format, $time);
		
		$this->comments_model->new_comment($data);
		
		echo "<h2 class='post'>".$data['name']."</h2>";
		
		echo "<p class='post'>".$data['comment']."</p>";
		
	}
}
?>