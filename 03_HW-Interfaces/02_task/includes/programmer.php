<?php 

class Programmer extends WorkingMan implements 
iPractice, iRead, iWork {

	public $salary;
	public $qualification;

	public function __construct($workingman_name, $workingman_date_b,
		$programmer_salary, $programmer_qualification) {
		parent::__construct($workingman_name, $workingman_date_b);
		$this->salary = $programmer_salary;
		$this->qualification = $programmer_qualification;
	}

	public function programmerInfo() {
		parent::workingmanInfo();
		echo $this->salary . '/ Sallary, in USD<br>';
		echo $this->qualification . ' Qualification, in %<br>';
	} 


	function practice($hours) {

		$coef_practice = $hours/1000;
		$this->qualification += $coef_practice*$this->qualification;
		if ($coef_practice > 0.1) {
			$raise = $coef_practice/100;
			$this->salary += $raise*$this->salary; 
		}

	}
	function read($books) {

		$coef_read = $books/100;
		$this->qualification += $coef_read*$this->qualification;
		if ($coef_read > 0.1) {
			$raise = $coef_read/100;
			$this->salary += $raise*$this->salary; 
		}
	}

	//won - for innovation, $number - number of jobs completed

	function work($number, $hours, $won) {

		$coef_work = $number/($hours*200);
		if ($won == 1) {
			$this->salary += $coef_work*$this->salary*3;
		} elseif ($won == 0) {
			$this->salary += $coef_work*$this->salary;
		}
	}
}