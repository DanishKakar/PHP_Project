<?php 

$file = "example.txt";

/* 
    w - mean write mode
    r - mean read mode
    x - mean execute file
    a mean appande file
*/

//  open the file with write mode
if($handle = fopen($file, "r")) {

    /* 
        each byte is equal one char, her we read 5 bytes from
        example.txt file.....
    */
    echo $content = fread($handle, 5); 

    /* 
        here we read from the hole content of example.txt file.....
    */
    // echo $content = fread($handle, filesize($file)); 

    //  close the file.
    fclose($handle);
} else {
    echo "The Application is not able to write on a file";
}

?>