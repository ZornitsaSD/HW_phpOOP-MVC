<?php 


class WorkingMan {
	public $name;
	public $date_of_birth;


//to be called in extendees
	public function __construct($workingman_name, $workingman_date_b) {
		$this->name = $workingman_name;
		$this->date_of_birth = $workingman_date_b;
		//$this->workingmanInfo();
	}
//to be called in extendees
	public function age() {
		$date_1 = date('d-m-Y');
		
		$datetime1 = date_create($date_1);
		$datetime2 = date_create($this->date_of_birth);

		$interval = date_diff($datetime1, $datetime2);
		$differenceFormat = '%y';
		return $interval->format($differenceFormat);

	}

	public function workingmanInfo() {
		echo $this->name . "/ Name <br>";
		echo $this->date_of_birth . "/ Date of Birth<br>";
		echo $this->age() . " Years Old, at the moment<br>";
	}
}


?>