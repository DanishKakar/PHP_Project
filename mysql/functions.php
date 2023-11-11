<?php   include('conn.php'); ?>
<?php

function  createUser() {
    if(isset($_POST["submit"])) {
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        //  use has function for password hashing....
        $password = password_hash($password, PASSWORD_DEFAULT);
        // use password encription by salt
        // $salt = "RahmatullahDanishKakar";
        // $password = crypt($password, $salt);
    
        // $query = "INSERT INTO books(name) VALUES('$username')";
        $query = "INSERT INTO USERS(username,password) VALUES('$username', '$password')";
    
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Queray Failed');
        } else {
            echo "Data Added Successfuly!";
        }
    
    }
}


function showAllData() {
    global $connection;
    $query = "SELECT * FROM USERS";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Queray Failed');
    }

    while($row = mysqli_fetch_assoc($result)){
        $userid = $row['userid'];
        echo "<option value='$userid'>$userid</option>";
    }


}

function updateData() {
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["userid"];

    $query = "UPDATE USERS SET username = '$username', password = '$password' WHERE userid = '$id'";

    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed!". mysqli_error($connection));
    } else {
        echo "Record Updated!";
    }
}
function deleteData() {
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["userid"];

    $query = "DELETE FROM USERS WHERE userid = '$id'";

    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed!". mysqli_error($connection));
    } else {
        echo "Record Deleted!";
    }
}
function deleteUser() {
    global $connection;
    $id = $_GET["userid"];

    $query = "DELETE FROM USERS WHERE userid = '$id'";

    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed!". mysqli_error($connection));
    } else {
        echo "User Deleted!";
    }
}

?>