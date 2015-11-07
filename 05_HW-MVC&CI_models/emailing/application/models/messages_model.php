<?php 

class Messages_model extends CI_Model {

public function __construct() 
{
	parent::__construct();
	$this->load->database();

}

public function get_all_messages($id)
{
	//SELECT * FROM `messages` join users on `email_to`= users.id 
	$this->db->select('*');
	$this->db->join('users', 'users.user_id = messages.from_user_id');
	$this->db->where('from_user_id', $id);
	$this->db->where('date_deleted', NULL);
	$q = $this->db->get('messages');
	$result = $q->result_array();

	return $result;
}//get_all_messages
public function get_all_users()
{
	$this->db->select('*');
	$q = $this->db->get('users');
	$result = $q->result_array();

	return $result;


}


public function add_message()
{

	$data_sender = array(
		'message_title' => $this->input->post('message_title'),
		'message_content' => $this->input->post('message_content'), 
		'email_to' => $this->input->post('email_to'),
		'from_user_id' => $this->input->post('from_user_id')
		);
		$this->db->insert('messages', $data_sender);
}//end add_message


public function get_message($id) 
{
		$this->db->where('id', $id);
		$q = $this->db->get('messages');
		
		return $q->row_array();
	}//end of get_unit
public function delete_message($id)
{
	$this->db->where('id', $id);
	$this->date_deleted = date('Y-m-d');

	$this->db->update('messages', $this);
}
}//endd Message_model class