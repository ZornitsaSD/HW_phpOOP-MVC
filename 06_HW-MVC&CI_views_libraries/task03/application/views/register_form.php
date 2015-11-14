<?php 
echo form_open('register/validation');
?>
<div>
<?php 	
//input type=text
	echo form_label('Въведете потребителско име');
	$data_username = array(
		'name' => 'username',
		'value' => set_value('username'),	
		'placeholder' => 'потребителско име',			

		);
	?>
	
	<?php echo form_error('username');?>

	<?php
	echo '<p>'.form_input($data_username).'</p>';
	?>
</div>
<div>
<?php 	
//input type=text
	echo form_label('Въведете парола');
	$data_password = array(
		'name' => 'password',
		'value' => set_value('password'),	
		'placeholder' => 'парола',			

		);
	echo form_error('password');
	echo '<p>'.form_password($data_password).'</p>';
	?>
</div>
<div>
<?php 	
//input type=text
	echo form_label('Потвърдете паролата');
	$data_passconf = array(
		'name' => 'passconf',
		'value' => set_value('passconf'),	
		'placeholder' => 'потвърдете парола',			

		);
	echo form_error('passconf');
	echo '<p>'.form_password($data_passconf).'</p>';
	?>
</div>
<div>
<?php 	
//input type=text
	echo form_label('Въведете email');
	$data_email = array(
		'name' => 'email',
		'value' => set_value('email'),	
		'placeholder' => 'email@email.com',			

		);
	echo form_error('email');
	echo '<p>'.form_input($data_email).'</p>';
	?>
</div>
<div>
	<?php

//submit button
	$reg_btn = array(
		'name' => 'submit',
		'value' => 'регистрирай се'
		);

	echo form_submit($reg_btn);
	?>
</div>
<?php

echo form_close();
