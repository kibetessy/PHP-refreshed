<?php
 for($x = 0; $x <=10; $x++){
  echo 'number' . $x . '<br>';
}

//while
 $x = 1;
 while($x <= 15){
     echo 'number' . $x . '<br>';
 }

//foreach loop.
$posts = ['First Post', 'Second Post', 'Third Post'];

     for($x = 0; $x < count($posts);$x++){
        echo $posts[$x];
 }

 foreach($posts as $post){
    echo $post;
 }
foreach($posts as $post){
    echo $index . '-' . $post . '<br>';
    

}
