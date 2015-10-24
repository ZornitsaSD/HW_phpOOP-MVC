<?php 

class Client extends People{	
	
	public $bill = 0;


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
}
