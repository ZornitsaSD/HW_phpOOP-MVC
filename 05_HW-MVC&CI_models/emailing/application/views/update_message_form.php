<?php 
/*echo "<pre>";
var_dump($receivers);
echo "</pre>";*/
$id = $_GET['id'];
$attributes = array (
	'id'	=>'messages_form',
	'class'	=>'form-horizontal');

//by default CI uses post method, to use get method you should use html form
echo form_open('messages/add_message', $attributes);
?>
<div class="form-group">
	<?php 	
//input type=text
	//INSERT To Username
	//dropdown!!!!

	echo form_label('Message To');
	foreach ($receivers as $to) {
		$to_options[$to['id']] = $to['username'];
	}
	//echo '<p>'.form_error('to').'</p>';
	echo '<p>'.form_error('to').'</p>';
	echo form_dropdown('to', $to_options, 0);
	
	
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
//from
echo form_hidden('from_username_id', $id);

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