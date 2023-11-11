<?php   include('functions.php'); ?>
<?php   include('conn.php');

    $query = "SELECT * FROM USERS";

    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Queray Failed' . mysqli_error($connection));
    }

    if(isset($_GET['userid'])) {
        $id = $_GET['userid'];
        // echo $id;
        deleteUser();
    }

?>

<?php include "layout/header.php"; ?>

    <div class="container">
        <div class="col-12">
        <!-- <div class="col-xs-6"> -->
            <h1 class="text-center">All Users</h1>
            <?php
                while($row = mysqli_fetch_row($result)){
            ?>
            <div class="col-sm-6 col-xs-12 col-md-4 col-lg-3">
            <form action="alluser.php" method="get">
                <pre>
                        
                    <?php
                        print_r($row);
                        echo "<br>";
                        echo "<button class='btn btn-danger float-end' type='submit' name='userid' value='$row[0]'>Delete</button>";
                    ?>                     
                </pre>
            </form>
            </div>
            <?php
            }
            ?>
        <!-- </div> -->
        </div>
    </div>

<?php include "layout/footer.php";  ?>