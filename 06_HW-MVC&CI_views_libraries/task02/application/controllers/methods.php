<?php 

class Methods extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('method_model');
	}

	public function index()
	{
		$data['dynamic_view'] = 'first_method';
		$data['title'] = 'index';
		$this->load->view('templates/main_view', $data);
	}

	public function method_two()
	{
		$data['dynamic_view'] = 'method_two';
		$data['title'] = 'method_two';
		$this->load->view('templates/main_view', $data);

	}
}