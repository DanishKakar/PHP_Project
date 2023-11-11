<?php 

$file = "example1.txt";

//  open the file with write mode
if(file_exists($file)) {

    unlink($file);
    echo "The File is Deleted!";
    //  close the file.
} else {
    echo "The file Does not Exists!";
}

?>