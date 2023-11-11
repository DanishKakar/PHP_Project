<?php include("conn.php"); ?>
<?php include('functions.php');
createUser(); 
?>

<?php include "layout/header.php"  ?>

    <div class="container">
        <div class="col-xm-12">
            <h1 class="text-center">Create User</h1>
            <form action="adduser.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Create">
            </form>
        </div>
    </div>

<?php include "layout/footer.php"  ?>