<?php 
class Subjects {
	public $subject_name;
	public $number_hours;
	public $number_marks;

	public function __construct($sub_name, $num_hours, $num_marks) {
		$this->subject_name = $sub_name;
		$this->number_hours	= $num_hours;
		$this->number_marks	= $num_marks;
	}


}

?>