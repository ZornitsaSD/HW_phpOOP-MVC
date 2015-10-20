<?php 
/**
* Class School and its successors
*/
class School {
	public $school_name;
	public static $year_opening = '15th Sept';
	
	function __construct($s_name)
	{
		$this->school_name = $s_name;
	} 
//приблизително така вървят часовете от първата смяна в училище
	public static function school_schedule_info() {

		$time = date('H:i');

		echo "Now in Schools is ";
		
		switch ($time) {
			case ($time >= '07:30' && $time <= '08:10'):
			echo "the first morning class going on";
			break;			
			case ($time >='08:20' && $time <='09:00'):
			echo "the second morning class going on";
			break;
			case ($time >= '09:20' && $time <='10:00'):
			echo "the  third morning class going on";
			break;
			case ($time >= '10:10' && $time <='10:50'):
			echo "the fourth morning class going on";
			break;
			case ($time >= '11:00' && $time <='11:40'):
			echo "the fifth morning class going on";
			break;
			case ($time >= '11:50' && $time <='12:30'):
			echo "the sixth morning class going on";
			break;
			case ($time >= '12:40' && $time <='13:30'):
			echo "the seventh morning class going on";
			break;
			default:
			echo "A Break Time:))";
break;
}
}
}
class Unit extends School {

	public $unit_name;

	public function __construct($s_name, $u_name) {
		parent::__construct($s_name);
		$this->unit_name = $u_name;
		$this->unitInfo();
	}

	public function unitInfo() {
		echo "School name - " . $this->school_name;
		echo "<br>";
		echo "Class id - " . $this->unit_name;
		echo "<br>";
	}


	public function teacherList($u_name) {
		global $database;
		
		$sql = "SELECT * FROM `teachers` JOIN `units` ON teachers.id = units.teacher_id WHERE `unit_name` = '5A'";
		$result = $database->query($sql);
		$no = 1;
		echo "<strong>Teachers List of " .$u_name . ":</strong><br>";

		while ($teacherList = mysqli_fetch_array($result)) {
			echo "No" . $no . " " . $teacherList['name'] . "<br>";
			$no++;
		}


	}

	public function studentList($u_name) {
		global $database;
		
		$sql = "SELECT * FROM `students` WHERE `unit_name`= '$u_name'";
		$result = $database->query($sql);
		$no = 1;
		echo "<strong>Students List of " . $u_name . ":</strong><br>";

		while ($studentList = mysqli_fetch_array($result)) {
			echo "No" . $no . " " . $studentList['student_name'] . "<br>";
			$no++;
		}
	}

	
}



?>