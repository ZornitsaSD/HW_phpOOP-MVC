<?php 

class Musician extends WorkingMan implements iPractice, iWork, iTravel  {
	public $popularity;
	public $fees;
	public $skills;

	public function __construct($workingman_name, $workingman_date_b, 
		$musician_popularity, $musician_fees, $musician_skills) {
		parent::__construct($workingman_name, $workingman_date_b);
		$this->popularity = $musician_popularity;
		$this->fees =  $musician_fees;
		$this->skills = $musician_skills;
	}

	public function musicianInfo() {
		parent::workingmanInfo();
		echo $this->popularity . '/Popularity, in %<br>';
		echo $this->fees . '/ Fees, in USD<br>';
		echo $this->skills . '/Skills, in %<br>';
	}

	//$hours - hours of practicing per day
	function practice($hours) {

		$coef_practice = $hours/100;

		$this->skills = $this->skills*$coef_practice + $this->skills;
		return $coef_practice;

		}
	//$number - number of concerts per year

		public function work($number, $hours, $won) {

			$coef_work = $number/100;
			$this->fees = $coef_work * $this->fees * $this->practice($hours) + $this->fees; 
			$this->popularity = $this->popularity*$coef_work;
			$profit = $this->fees*$number;
			
			}

		public function tour_profit($days, $price, $km, $number) {

			$accommodation_expenses = $days*$price;
			$travel_expenses = 0.5*$km;

			$profit = $this->fees*$number - $travel_expenses - $accommodation_expenses;
			return $profit;
			
		}

	


	}

		