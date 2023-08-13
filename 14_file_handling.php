<?php
//able to read and write files on server open a file or save a content to iterator_apply
//has built in functions for the file

$file = 'extras/named.txt';

if(file_exists($file)){
    // echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
    
}else{
    $handle = fopen($file, 'w');
    $contents = 'Jude' . PHP_EOL . 'Sandy' . PHP_EOL . 'Mike';
    fwrite($handle, $contents);
    fclose($handle);
}
