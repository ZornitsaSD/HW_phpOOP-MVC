<?php 
class Student {
	var $name;
	var $class;
	var $av_grades;
	var $motivation;

	public function __construct($st_name, $st_class, $st_av_grades, $st_motivation) {
		$this->name = $st_name;
		$this->class = $st_class;
		$this->av_grades = $st_av_grades;
		$this->motivation = $st_motivation;
		$this->ShowInfo();
		
	}

	public function ShowInfo() {
		echo "<strong>Basic info</strong><br>";
		echo "name - " . $this->name . "<br>";
		echo "studies in " . $this->class . "<br>";
		echo "has GPA in school  " . $this->av_grades . "<br>";
		if ($this->motivation <= 0) {
			$this->motivation = 0;
		} elseif ($this->motivation >= 1) {
				$this->motivation = 1;
			}		
		echo "has " . $this->motivation . " motivation for studying<br>";
		echo "<hr/>";
	}

	public function go_to_school($days) {
		$this->motivation -= $days*0.005;
	}
	private function study($hours) {
		$this->av_grades += $hours*0.01*$this->av_grades;
		}
	private function do_homework() {
		$this->av_grades += $this->av_grades*0.01;
	}
	public function grade_change($hours) {
		$this->study($hours);
		$this->do_homework();
		if ($this->av_grades >= 6) {
			$this->av_grades = 6.00;
		}
	}
	public function do_test($subject, $grade) {
		echo "<br>";
		echo "<strong>" . $this->name . "</strong> did a test in " . $subject . "<br>";
		echo "The result in " . $subject . "`s test is " . $grade . "<br>";
		$this->av_grades = ($this->av_grades + $grade)/2;
		echo "Now " . $this->name . "`s GPA is " . $this->av_grades;
	}
}

$pesho = new Student('Pesho', '6a', '5.45', '0.8');
$pesho->go_to_school(5);
$pesho->grade_change(7);
echo "<br>";

echo "<strong>After studyng for 10 hours, doing homeworks and being in school 5 days</strong><br>" ;
$pesho->ShowInfo();
$pesho->go_to_school(10);
$pesho->grade_change(15);
echo "<br>";

echo "<strong>After studyng for 15 hours, doing homeworks and being in school 10 days</strong><br>" ;
$pesho->ShowInfo();
$pesho->do_test('maths', '4.25');
echo "<br>";
echo "<br>";
$pesho->ShowInfo();

?>