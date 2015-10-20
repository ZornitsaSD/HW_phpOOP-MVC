<?php 
class SchoolPeople {
	public $name;
	public $phone_number;

	public function __construct($pn, $pphone_n) {
		$this->name 		= $pn;
		$this->phone_number = $pphone_n;
	}
}

class Teachers extends SchoolPeople {
	public $education;
	public $number_of_subjects;
	//has subjects, array
	public $subjects;

	public function __construct($pn, $pphone_n, $teach_education, $num_of_sub, $sub_name, $num_hours, $num_marks) {
		parent::__construct($pn, $pphone_n);
		$this->education = $teach_education;
		$this->number_of_subjects = $num_of_sub;
		for ($i=0; $i<$num_of_sub; $i++) {
			$this->subjects[$i] = new Subjects($sub_name[$i], $num_hours[$i], $num_marks[$i]);
		}

	}

	public function InfoTeacher() {
		echo "<h3>Teacher Info</h3>";
		echo "Name - " . $this->name;
		echo "<br>";
		echo "Phone No - " . $this->phone_number;
		echo "<br>";
		echo "Education - " . $this->education;
		echo "<br>";
		echo "<br>";
		echo "Teaches - " . $this->number_of_subjects . ' subjects, as follows -';
		echo "<br>";
		for ($i=0; $i < $this->number_of_subjects ; $i++) { 

			echo "subject name - <strong>" . $this->subjects[$i]->subject_name . '</strong><br>';
			echo "number of hours - " . $this->subjects[$i]->number_hours . '<br>';
			echo "number of marks - " . $this->subjects[$i]->number_marks . '<br>';

		}
		echo "<br>";
	}
//$years = years of teaching
	//allows maximum number of teaching subjects

	public function works($years) {
		
		if ($years%3==0) {
			$coef = $years/3;
			$this->number_of_subjects = $coef + 1;
			echo "Teacher " . $this->name ." has experince to teach max " . $this->number_of_subjects . " subjects. <br>";

		} else {

			$surplus = $years%3;
			$wait = 3 -$surplus;
			echo "In " . $wait ." years teacher " . $this->name ."`s number of subjects will increase<br>";
		}
		
	}

	public function evaluate($mark, $subject, $student_id) {
		global $database;

		$sql = "INSERT INTO `marks`(`mark`, `subject_name`, `student_id`) VALUES ($mark, '$subject', $student_id)";
		if ($database->connection->query($sql) === TRUE) {
			echo "!";
		}

		
	}
}


class Student extends SchoolPeople {
	public $id;

	public function __construct($st_id, $people_name, $people_phone_number) {
		$this->id 	= $st_id;
		parent::__construct($people_name, $people_phone_number);

	}

	public function StudentInfo($student_id) {
		echo "<h2>Student Info</h2>";
		echo "<br>";
		echo "Id - " . $this->id;
		echo "<br>";
		echo "Name - " . $this->name;
		echo "<br>";
		echo "Pnone No - " . $this->phone_number;
		echo "<br>";
		$this->gpa($student_id);
		echo "<br>";

	}
//среден успех
	public function gpa($student_id) {
		global $database;

		$sql = "SELECT AVG(`mark`) as gpa FROM `marks` WHERE `student_id`= $student_id";
		$result = $database->query($sql);
		$found = mysqli_fetch_array($result);
		$gpa = round($found['gpa'], 2);
		echo 'GPA - ' . $gpa;

		
	}
}



