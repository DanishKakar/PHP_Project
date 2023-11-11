<?php   include('conn.php'); ?>
<?php include('functions.php'); ?>

<?php 
    if(isset($_POST['submit'])) {

       deleteData();
    }
?>

<?php include "layout/header.php"  ?>

    <div class="container">
        <div class="col-xs-12">
            <h1 class="text-center">Delete User</h1>
            <form action="deleteuser.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <select name="userid" id="">
                        <?php
                            showAllData();
                        ?>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Delete">
            </form>
        </div>
    </div>

<?php include "layout/footer.php"  ?>