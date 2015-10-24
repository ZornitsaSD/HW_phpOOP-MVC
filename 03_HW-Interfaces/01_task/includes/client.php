<?php 

class Client extends People{	
	
	private $bill = 0;


	public function __construct($client_name, $client_sex, 
		$client_artist_name, $client_music_genre, $client_song_name, $client_bill) {
		parent::__construct($client_name, $client_sex, 
			$client_artist_name, $client_music_genre, $client_song_name);
		$this->bill = $client_bill;
		
	}

	public function clientInfo() {
		parent::peopleInfo();
		echo "BILL - ". $this->bill."<br>";
	}

	public function make_bill($expenses) {
		$this->bill += $expenses;
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
}
