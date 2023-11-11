<?php 

$file = "example.txt";

/* 
    w - mean write mode
    r - mean read mode
    x - mean execute file
    a mean appande file
*/

//  open the file with write mode
if($handle = fopen($file, "a")) {

    fwrite($handle, "\n I love the PHP.");
    //  close the file.
    fclose($handle);
} else {
    echo "The Application is not able to write on a file";
}

?>