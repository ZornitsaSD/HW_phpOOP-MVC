<?php 
include_once('includes\header.php'); 


echo "<h2>Object 1 Class WorkingMan</h2>";
$worker = new WorkingMan('Worker 1', '01-01-1990');
$worker->workingmanInfo();
echo "<hr>";

echo "<h2>Object 2 Class Musician</h2>";
$ozzy_osbourne = new Musician('Ozzy Osbourne', '03-12-1948', 70, 100000, 40);
$ozzy_osbourne->musicianInfo();
echo "<hr>";
$ozzy_osbourne->practice(15);
$ozzy_osbourne->work(100, 15, 1);
//$days, $price, $km, $number
echo "<h3>Profit from 2015 tour is " . $ozzy_osbourne->tour_profit(150, 500, 10000, 130) . " USD</h3>";
$ozzy_osbourne->musicianInfo();
echo "<hr>";
echo "<h2>Object 3 Class Lawyer</h2>";
//$workingman_name, $workingman_date_b, $lawyer_fees, $lawyer_ncl, $lawyer_ncw
$lawyer = new Lawyer('Lawyer Lawyer', '12-03-1968', 500, 10, 150);
$lawyer->lawyerInfo();
$lawyer->practice(5);
$lawyer->read(3);
$lawyer->work(3, 100, 1);
echo "<h3>Info again - </h3>";
$lawyer->lawyerInfo();

echo "<hr>";
echo "<h2>Object 4 Class Programmer</h2>";
//$workingman_name, $workingman_date_b, $programmer_salary, $programmer_qualification
$programmer = new Programmer("Programmer Programmer", '20-01-1975', 1000, 10);
$programmer->programmerInfo();
$programmer->practice(200);
$programmer->read(10);
$programmer->work(20, 2, 1);
echo "<h3>Info again - </h3>";

$programmer->programmerInfo();

include_once('includes\footer.php');


