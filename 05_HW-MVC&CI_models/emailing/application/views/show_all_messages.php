<?php 

echo "<h2>Hi, ".$all_messages[0]['username']." Your messsages -</h2>";
echo "<ol>";

foreach ($all_messages as $value) {
	echo '<li>'.$value['message_title'].'</li>';
	echo '<ul><li>'.$value['message_content'].'</li>';
	echo '<li>to <b>'.$value['email_to'].'</b></li>';
	echo '<li> sent on '.$value['date_sent'].'</li></ul>';

	echo '<a href="'.base_url().'index.php/messages/delete_message/'.$value['id'].'">Delete</a>';
}
echo "</ol>";
echo '<a href="'.base_url().'index.php/messages/add_message_form/'.$all_messages[0]['from_user_id'].'">Send New Message</a>';
