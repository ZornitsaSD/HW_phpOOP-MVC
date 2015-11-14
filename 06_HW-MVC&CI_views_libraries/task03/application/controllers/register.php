<?php 

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$data['dynamic_view'] = 'register_form';
		$data['title'] = 'register';
		$this->load->view('template/main_view', $data);

		

	}//end of index

	public function validation()
	{
		$this->lang->load('form_validation_lang', 'bulgarian');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		
		$this->form_validation->set_rules('username', 'Потребител', 'trim|required|min_length[4]|max_length[12]');
		$this->form_validation->set_rules('password', 'Парола', 'trim|required|min_length[8]|matches[passconf]|md5');
		$this->form_validation->set_rules('passconf', 'Потвърдете паролата', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() === FALSE) 
		{
			$this->index();
			} 
		else 
		{
			
			$data['dynamic_view'] = 'form_success';
			$data['title'] = 'success';
			$this->load->view('template/main_view', $data);
		}
	}//end of validation
}