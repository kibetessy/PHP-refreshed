<?php
$string = 'Hello World';

//Get length of a astring
echo strlen($string);

//find the position of the first occurence of a substring in astring
echo strpos($string, '0');

//find the position of the last occurence of a substring in astring
echo strpos($string, '0');

//Reverse a string
echo strrev($string);

//convert all characters to lowercase
echo strtolower($string);

//convert all characters to uppercase
echo strtoupper($string);

//Uppercase the first character of each word
echo ucwords($string);

// /String replace
echo str_replace('World', 'Everyone', $string);

//Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);

//Starts with
if (str_starts_with($string, 'Hello')){
    echo 'YES';
}

//Ends with
if (str_ends_with($string, 'ld')){
    echo 'YES';
}

//OTHERS HTML SPECIALCHARS AND ENTITIES
$string2 = '<h1> Hello</h1>';
//echo $string2;

//outputs javascript when passed as a form and if thats not what to output 
//Use HTML special chars

$string2 = '<script>alert("can not log")</script>';
//echo $string2;
echo htmlspecialchars($string2);

//formated string for outside data from users 

printf('%s likes to %s', 'Brad', 'code');
printf('1+1=%f, 1+1');









