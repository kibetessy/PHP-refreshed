<?php
  function registerUser($email){
    echo $email . ' registered';

 registerUser('Ess');
  }

 function sum($n1 = 4, $n2 = 5){
    return $n1 +$n2;
 }$number =sum();
 echo $number;

 $multiply = fn($n1, $n2) => $n1 * $n2;

   echo $multiply(9,9);