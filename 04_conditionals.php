<?php
$age = 20;
if($age>=18){
   // echo 'You are eligible to vote';
} else {
    //echo 'Sorry, you cant vote';
    }

// itenary operators
$posts = ['First Post'];

echo !empty($posts) ? $posts[0] : 'No Posts';

//put sth in variable
$firstPost = !empty($posts) ? $posts[0] : null;

//switch condition
$favcolor = 'yellow';
switch($favcolor) {    
 case 'blue':
    echo 'Your favorite color is blue';
    break;
    case 'green':
    echo 'Your favorite color is green';
    break;
    case 'orange':
    echo 'Your favorite color is orange';
    break;
    default:
    echo 'Your fav color is not blue orange or green';
}