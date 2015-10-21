<?php
class Cafe {
	private $name;
	private $address;
	private $capacity;
	private $music;
	private $bartender;
}

class Music {
	private $music;

}

class CafePeople {
	private $name;
	private $sex;
	//has Music object
	private $favorite_music;
	private $phone;

}

class Bartender extends CafePeople{
	
	private $salary;

}


class Client extends CafePeople{
	private $bill;
}


?>