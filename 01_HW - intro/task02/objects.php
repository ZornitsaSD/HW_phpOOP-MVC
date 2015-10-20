<?php 
include_once('class_food.php');
include_once('class_hardware.php');

/*
* class Food
* First Object
* $product_name, $product_price, $product_quantity, $product_expenses, $product_expiry_date
*/
$bread_delivered = 1000;
$bread_sold = 1000;
$bread = new Foods ('bread', 1, 1000, 0.5, '23-10-15');
echo "<p><strong>Initial info</strong></p>";
$bread -> ShowInfo();
echo "<p><strong>What happened next</strong></p>";
$bread->InStock($bread_sold, $bread_delivered);
$bread->printProfit($bread_sold);
$bread->scrap();
echo "<hr>";
$bread->name = 'loaf of bread';
echo $bread->name;
echo "<hr>";
$bread->price = 2.25;
echo $bread->price;
echo "<hr>";

/*
* class Food
* Second Object
* $product_name, $product_price, $product_quantity, $product_expenses, $product_expiry_date
*/

$chocolate_sold = 3200;
$chocolate_delivered = 5000;
$chocolate = new Foods ('chocolate', 4.25, 5252, 1.23, '18-10-15' );
echo "<p><strong>Initial info</strong></p>";
$chocolate -> ShowInfo();
echo "<p><strong>What happened next</strong></p>";
$chocolate->InStock($chocolate_sold, $chocolate_delivered);
$chocolate->printProfit($chocolate_sold);
$chocolate->scrap();
echo "<hr>";
$chocolate->expiry_date = '01-10-15';
echo $chocolate->expiry_date;
echo "<br>";
$chocolate->scrap();
echo "<hr>";

/*
* class Hardware
* First Object
* $prod_model, $prod_date_production, $prod_quantity, $prod_price, $product_expenses
*/
$shoes = new Hardware('shoes', '2014-01', 1500, 100, 55);
echo "<p><strong>Initial info</strong></p>";
$shoes->ShowInfo();
echo "<p><strong>Discount</strong></p>";
$shoes->actualPrice();

//$sold, $delivered, $broken
$shoes_sold = 1000;
$shoes_delivered = 500;
$shoes_broken = 10;
$shoes->InStock($shoes_sold, $shoes_delivered, $shoes_broken);
echo "<br>";
$shoes->profit($shoes_sold, $shoes_broken);
echo "<hr>";
$shoes->model = 'female shoes';
echo $shoes->model;
echo "<hr>";


/*
* class Hardware
* Second Object
* $prod_model, $prod_date_production, $prod_quantity, $prod_price, $product_expenses
*/
$computer = new Hardware('computer', '2015-01', 500, 700, 400);
$computer->ShowInfo();
$computer_sold = 250;
$computer_delivered = 200;
$computer_broken = 2;
$computer->profit($computer_sold, $computer_broken);
$computer->InStock($computer_sold, $computer_delivered, $computer_broken);
echo "<br>";
echo "<hr>";
$computer->model = 'DELL inspiron';
echo $computer->model;
echo "<hr>";
