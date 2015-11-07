<?php 
class Messages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('messages_model');
		$this->load->helper('url_helper');
	}

	public function show_all_messages($id)
	{
		
		$data['all_messages'] = $this->messages_model->get_all_messages($id);
		$count = count($data['all_messages']);
		
		$this->load->view('show_all_messages', $data);
	}

	public function add_message()
	{
//TO DO messages to appear in bg
		$this->load->library('form_validation');

		$this->form_validation->set_rules('message_title', 'Title', 'required|trim');
		$this->form_validation->set_rules('message_content', 'Content', 'required|trim');
		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_message_form();
			echo "Try again!";
		} 
		else 
		{
			
			$this->messages_model->add_message();
			echo "Succcess!";
			
		}

		
	}//add_message

	public function send_email() 
	{
		$this->load->library('email')
		$from = $this->input->post('kokolina18@abv.bg', 'Milena');
		$this->email->from($from);
		$to = $this->input->post('email_to');
		$this->email->to($to);
		//$this->email->cc('another@another-example.com');
		//$this->email->bcc('them@their-example.com');
		$title = $this->input->post('message_title');
		$this->email->subject($title);

		$content = $this->input->post('message_content');
		$this->email->message($content);

		if ($this->email->send())
		{
			echo "success";
		}
		$this->email->print_debugger();

	}

	public function add_message_form($id) 
	{
		$data['from_user_id'] = $id;
		
		$this->load->library('form_validation');
		$this->load->view("add_message_form", $data);


	}





	public function delete_message($id)
	{
		$data['message'] = $this->messages_model->get_message($id);
		$this->messages_model->delete_message($id);
		//$this->show_all_messages();

		echo 'You deleted the message!';


	}//delete_message



}//end of class Messages