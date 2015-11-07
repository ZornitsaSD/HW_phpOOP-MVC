<?php 
/*echo "<pre>";
var_dump($receivers);
echo "</pre>";*/


//by default CI uses post method, to use get method you should use html form
echo form_open('messages/send_email');
?>
<div class="form-group">
	<?php 	
	$data_id = array(
		'from_user_id'=>$from_user_id);
	echo form_hidden($data_id);
	
	?>
</div>

<div class="form-group">
	<?php 	
//input type=text
	//INSERT Email

	echo form_label('Enter Email');

	$data_message = array(
		'class' => 'form-control',	
		'name' => 'email_to',	
		'value' => set_value('email_to'),
		'placeholder' => 'email to',			

		);
	echo '<p>'.form_error('email_to').'</p>';
	echo '<p>'.form_input($data_message).'</p>';
	?>
</div>

<div class="form-group">
	<?php 	
//input type=text
	//INSERT Message Title

	echo form_label('Title');

	$data_message = array(
		'class' => 'form-control',	
		'name' => 'message_title',	
		'value' => set_value('message_title'),
		'placeholder' => 'message title',			

		);
	echo '<p>'.form_error('title').'</p>';
	echo '<p>'.form_input($data_message).'</p>';
	?>
</div>
<div class="form-group">
	<?php 	
//input type=te

	echo form_label('Your message');

	$data = array(
		'class' => 'form-control',	
		'name' => 'message_content',
		'value' => set_value('message_content'),	
		'placeholder' => 'message content',			

		);
	echo '<p>'.form_error('message_content').'</p>';
	echo '<p>'.form_textarea($data).'</p>';
	?>
</div>


<?php


// Would produce:

//<input type="hidden" name="username" value="johndoe" />

//submit button
$btn = array(
	'class' => 'btn btn-info', 
	'name' => 'submit',
	'value' => 'Въведи'
	);

echo form_submit($btn);
?>
</div>
<?php

echo form_close();