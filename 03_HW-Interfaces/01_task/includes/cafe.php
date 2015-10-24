<?php
class Cafe {
	public $name;
	public $address;
	public $capacity;
	public $music;
	public $bartender;
	public $number_bartenders;
	public $client;
	public $number_clients;
	

	public function __construct($cafe_name, $cafe_address, $cafe_capacity, $cafe_artist_name, 
		$cafe_music_genre, $cafe_song_name, 
		$bartender_name, $bartender_sex, 
		$bartender_artist_name, $bartender_music_genre, $bartender_song_name, $bartender_salary, $bartender_phone, 
		$cafe_number_bartenders,
		$client_name, $client_sex, 
		$client_artist_name, $client_music_genre, $client_song_name, $client_bill, $cafe_number_clients) 
	{
		$this->name = $cafe_name;
		$this->address = $cafe_address;
		$this->capacity = $cafe_capacity;
		$this->music = new Music( $cafe_artist_name, $cafe_music_genre, $cafe_song_name);

		$this->number_bartenders = $cafe_number_bartenders;
		for ($i=0; $i < $this->number_bartenders ; $i++) { 
			$this->bartender[$i] = new Bartender($bartender_salary[$i], $bartender_name[$i], $bartender_sex[$i],
				$bartender_phone[$i], $bartender_artist_name[$i], $bartender_music_genre[$i],
				$bartender_song_name[$i]);

		}
		$this->number_clients = $cafe_number_clients;
		for ($p=0; $p < $this->number_clients ; $p++) { 
			$this->client[$p] = new Client($client_name[$p], $client_sex[$p], 
				$client_artist_name[$p], $client_music_genre[$p], $client_song_name[$p], $client_bill[$p]);

		}		
		
	} //end of __construct

	public static function time() {
		echo date('l:H:i')."<br>";
	}//end of time

	public function open_close() {

		$time1 = date('H:i');
		echo $time1;
		echo "<hr>";
		$time2 = date('l');
		if (($time1 >= '18:30' && $time1 <= '23:59' ) && ($time2=='Thursday' || $time2== 'Wednesday' 
			|| $time2== 'Tuesday' || $time2== 'Friday' 
			|| $time2=='Saturday')) {
			echo "The bar is opened <br>";
	} elseif (($time1 >= '00:00' && $time1 <= '06:00' ) && ($time2=='Thursday' || $time2== 'Wednesday' 
			|| $time2== 'Tuesday' || $time2== 'Friday' 
			|| $time2=='Saturday')) {
			echo "The bar is opened <br>";
	
	} else {
		echo "The bar is closed<br>";
	}
} //end of close

public function cafeInfo() {
	echo "<h2>Name - " . $this->name . '</h2>';
	echo "Location - " . $this->address . '<br>';
	echo "Capacity - " . $this->name . '<br>';
	echo "<h3>Music played - </h3>" ;
	$this->music->musicInfo();

	for ($j=0; $j < $this->number_bartenders ; $j++) {
		$number = $j+1;
		echo "<h3>Bartender " . $number . " info - </h3>";
		$this->bartender[$j]->bartenderInfo();
		echo "<hr>";
	}
	for ($m=0; $m < $this->number_clients ; $m++) {
		$number = $m+1;
		echo "<h3>Client " . $number . " info - </h3>";
		$this->client[$m]->clientInfo();
		echo "<hr>";
	}

	} //end of cafeInfo



}






?>