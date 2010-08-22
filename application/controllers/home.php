<?php

class Home extends Controller {
	
	function index()
	{		
		
		$data['row'] = $this->posts_model->getAll();
		
		$data['title'] = 'Welcome to The Daily Font!';
		
		$this->load->view('includes/header', $data);
		
		$this->load->view('welcome', $data);
		
		$this->load->view('includes/footer');
	}
	
	function about()
	{
		$data['title'] = 'About';
		
		$this->load->view('includes/header', $data);
		
		$this->load->view('about');
		
		$this->load->view('includes/footer');
	}
	
	function archive()
	{
		$data['title'] = 'Archive';
		
		$this->load->view('includes/header', $data);
		
		$this->load->view('about');
		
		$this->load->view('includes/footer');
	}
	
	function contact()
	{
		$data['title'] = 'Contact';
		
		$this->load->view('includes/header', $data);
		
		$this->load->view('contact');
		
		$this->load->view('includes/footer');
	}

}