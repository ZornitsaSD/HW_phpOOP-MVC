<?php  

class Lawyer extends WorkingMan 
implements iPractice, iRead, iWork {

	public $fees;
	public $number_of_cases_lost;
	public $number_of_cases_won;

	public function __construct($workingman_name, $workingman_date_b, $lawyer_fees, $lawyer_ncl, $lawyer_ncw) {
		parent::__construct($workingman_name, $workingman_date_b);
		$this->fees = $lawyer_fees;
		$this->number_of_cases_lost = $lawyer_ncl;
		$this->number_of_cases_won = $lawyer_ncw;
	}

	public function lawyerInfo() {
		parent::workingmanInfo();
		echo $this->fees . '/Fees, in USD %<br>';
		echo $this->number_of_cases_lost . '/ Number of cases lost<br>';
		echo round($this->number_of_cases_won) . '/ Number of cases won<br>';
	}


	function practice($hours) {
		$this->number_of_cases_won = round($hours/100*$this->number_of_cases_won) + $this->number_of_cases_won;
		return  round($this->number_of_cases_won);

	}
	
	function read($books) {
		$this->number_of_cases_won = $books/100*$this->number_of_cases_won + $this->number_of_cases_won;
		return  round($this->number_of_cases_won);
	}
	
	function work($cases, $hours, $won) {
		if ($won == 1) {
			$this->fees = $this->fees*$cases*$hours*2;
		} elseif ($won == 0) {
			$this->fees = $this->fees*$cases*$hours/2;
		}
		

	}
	

}