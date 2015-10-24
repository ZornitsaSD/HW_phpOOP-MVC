<?php 
//construct without this class
class People {
	private $pname;
	private $sex;
	//has Music object
	private $favorite_music;
	
	

	public function __construct($people_name, $people_sex, $people_artist_name, 
		$people_music_genre, $people_song_name) {
		$this->pname = $people_name;
		$this->sex =  $people_sex;
		$this->favorite_music = new Music($people_artist_name, $people_music_genre, $people_song_name);
		
		
	}

	public function peopleInfo() {
		echo "Name - ". $this->pname."<br>";
		echo "Sex - ". $this->sex."<br>";
		echo "<h4>Favorite music</h4>";
		$this->favorite_music->musicInfo();
		
		
	}

	public function __set($name, $value){
        
        
        if (property_exists($this, $name)) {
        	$this->$name = $value;
    	}else{
        	echo "property $name does NOT exist <br/>";
        }
    }//end

    public function __get($name)
    {
        
        if (property_exists($this, $name)) {
        	return $this->$name;
        }else{
        	echo "property $name does NOT exist <br/>";
        }
	} //end

	
}
