<?php 
class Music {
	public $artist;
	public $genre;
	public $song_name;

	public function __construct($an, $mg, $sn) {
		$this->artist = $an;
		$this->genre = $mg;
		$this->song_name = $sn;
	}

	public function musicInfo() {
		echo "artists - ". $this->artist."<br>";
		echo "genre - ". $this->genre."<br>";
		echo "artists - ". $this->song_name."<br>";
	}
}