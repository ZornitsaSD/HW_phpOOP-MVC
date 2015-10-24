<?php 
//construct without this class
class People {
	public $name;
	public $sex;
	//has Music object
	public $favorite_music;
	public static $people_in_cafe;
	

	public function __construct($people_name, $people_sex, $people_artist_name, 
		$people_music_genre, $people_song_name) {
		$this->name = $people_name;
		$this->sex =  $people_sex;
		$this->favorite_music = new Music($people_artist_name, $people_music_genre, $people_song_name);
		self::$people_in_cafe++;
		
	}

	public function peopleInfo() {
		echo "Name - ". $this->name."<br>";
		echo "Sex - ". $this->sex."<br>";
		echo "<h4>Favorite music</h4>";
		$this->favorite_music->musicInfo();
		
		
	}

	public static function count_people() {
		$number = self::$people_in_cafe;
		if ($number !== 0) {
			echo "There are " . $number . " people in The Cafe at the moment.";
		} else {
			echo "There is nobody at The Cafe now.";
		}

		
	}



}
