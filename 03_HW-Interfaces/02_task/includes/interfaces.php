<?php 

interface iPractice {
	function practice($hours);
}

interface iRead {
	function read($books);
}

interface iWork {
	function work($number, $hours, $won);
}
 
interface iTravel {
	function tour_profit($days, $price, $km, $number);
	
}

?>