<?php 
class Music {
	private $artist;
	private $genre;
	private $song_name;

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