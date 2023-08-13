<?php
$numbers = [1,33,2,50];
$fruits = array('apple', 'orange', 'pear');
var_dump($numbers);
//echo $fruits[1]; outputs apple

//associate array
$colors = [
1 => 'red',
2 => 'blue',
3 => 'green'
];
 //echo $colors[3]; output green

$hex = [
    'red' => '#f00',
    'green' => '#00f',
    'blue' => '#0f0'

];
//echo $hex['blue'];

$person = [
     [
    'first_name' => 'Ess',
    'last_name' => 'kibet',
    'email'=> 'esskib@gmail.com'
     ],
[
    'first_name' => 'john',
    'last_name' => 'doe',
    'email'=> 'jdoe@gmail.com'
],
[
    'first_name' => 'joy',
    'last_name' => 'doet',
    'email'=> 'doetj@gmail.com'
],
];

//echo $person[1]['email'];
var_dump(json_encode($person));