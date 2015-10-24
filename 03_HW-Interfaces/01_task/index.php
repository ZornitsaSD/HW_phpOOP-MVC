<?php 
include_once('includes\header.php'); 
Cafe::time();

//$cafe_name, $cafe_address, $cafe_capacity, $cafe_artist_name, 
//$cafe_music_genre, $cafe_song_name, 
//$bartender_name, $bartender_sex, 
//$bartender_artist_name, $bartender_music_genre, $bartender_song_name, $bartender_salary, $bartender_phone
//$client_name, $client_sex, 
//$client_artist_name, $client_music_genre, $client_song_name, $client_bill
$client_name = array (
	0 => 'Client First',
	1 => 'Client Second',
	2 => 'Client Third'); 
$client_sex = array (
	0 => 'Male',
	1 => 'Female',
	2 => 'Male'); 
$client_artist_name = array (
	0 => 'Client First Arist',
	1 => 'Client Second Artist',
	2 => 'Client Third Artist'); 
$client_music_genre = array (
	0 => 'Client First Music',
	1 => 'Client Second Music',
	2 => 'Client Third Music'); 
$client_song_name = array (
	0 => 'Client First Song',
	1 => 'Client Second Song',
	2 => 'Client Third Song'); 
$client_bill = array (
	0 => 10,
	1 => 0,
	2 => 30); 

$bartender_salary = array (
	0 => 1000,
	1 => 1500);
$bartender_name = array (
	0 => 'Bartender First',
	1 => 'Bartender Second');
$bartender_sex = array (
	0 => 'Male',
	1 => 'Female');
$bartender_phone = array (
	0 => '00-00-00',
	1 => '11-11-11'); 
$bartender_artist_name = array (
	0 => 'B Artist 1',
	1 => 'B Artist 2');
$bartender_music_genre = array (
	0 => 'B music 1',
	1 => 'B music 2');
$bartender_song_name = array (
	0 => 'B song 1',
	1 => 'B song 2');

$cafe = new Cafe('The Cafe', 'The Address', 100, 'Cafe Fav Artist', 'Cafe Music', 'Cafe Song', 
	$bartender_name, $bartender_sex, $bartender_artist_name, $bartender_music_genre, 
	$bartender_song_name, $bartender_salary, $bartender_phone, 2,
	$client_name, $client_sex, $client_artist_name, $client_music_genre, $client_song_name, $client_bill, 3);
$cafe->open_close();

$cafe->cafeInfo();
$client = new Client('CN', 'AS', 'AN', 'MG', 'S', 10);
$client->clientInfo();
echo "<hr>";

$client->make_bill(20); 
$client->clientInfo();

$bartender = new Bartender('Bartender 3', 'Male', 
			'bartender artist name', 'BMG', 'BSN', 1000, '00-00-00');
$bartender->bartenderInfo();
echo "<hr>";
$bartender->perks(200);
echo "Bartender`s salary " . $bartender->salary;
echo "<hr>";
$bartender->phone = "BARTENDER";
$bartender->bartenderInfo();
include_once('includes\footer.php');
?>