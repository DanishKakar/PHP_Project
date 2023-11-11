<?php 

$file = "example.txt";

/* 
    w - mean write mode
    r - mean read mode
    x - mean execute file
    a mean appande file
*/

//  open the file with write mode
$handle = fopen($file, "w");



//  close the file for do not load on the cpu
fclose($handle);



?>