<?php

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection) {
        echo "We are connected!";
    }
    else {
        die("Database Connection failed!");
    }

}

?>

<?php include "layout/header.php"  ?>

    <div class="container">
        <div class="col-xs-6">
            <h1 class="text-center">Login User</h1>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>

<?php include "layout/footer.php"  ?>