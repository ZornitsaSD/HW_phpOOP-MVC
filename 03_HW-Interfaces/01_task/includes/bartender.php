<?php 

//add needed info
class Bartender extends People{	
	private $salary;
	private $phone;

	public function __construct($bartender_name, $bartender_sex, 
			$bartender_artist_name, $bartender_music_genre, $bartender_song_name, $bartender_salary, $bartender_phone) {
		parent::__construct($bartender_name, $bartender_sex, 
			$bartender_artist_name, $bartender_music_genre, $bartender_song_name);
		$this->salary = $bartender_salary;
		$this->phone = $bartender_phone;

	}

	public function bartenderInfo() {
		parent::peopleInfo();
		echo "Salary - ". $this->salary."<br>";
		echo "Phone No - ". $this->phone."<br>";
	}

	public function __set($name, $value){
        
       
        if (property_exists($this, $name)) {
        	$this->$name = $value;
    	}else{
        	echo "property $name does NOT exist <br/>";
        }
    }

	public function __get($name)
    {
       
        if (property_exists($this, $name)) {
        	return $this->$name;
        }else{
        	echo "property $name does NOT exist <br/>";
        }
	}

	public function perks($order)  {

		$this->salary += $order*15/100;	


	}
}
