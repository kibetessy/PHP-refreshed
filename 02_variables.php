<?php
//echo 'hello12';

//variables start with $

$name = 'Ess';
$age = '28';
$has_kids = false;
$cash_on_hand = 200.50;

var_dump($cash_on_hand); //shows data type

echo $name . ' is ' . $age . ' ýears old';
echo "${name} is ${age} years old";

 $x = '5' + '5';
 var_dump($x);
 echo 10 - 5;

//constants
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
echo HOST;