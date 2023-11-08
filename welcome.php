<?php
// define variables and set to empty values
$name = $email = $lname =  "";
$nameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(empty($_POST["name"])) {

      $nameErr = "Name is required";
  } elseif(strlen($_POST["name"]) < 5) {
      $nameErr = "Name should be greater than 5!";
  } else {
    $name = test_input($_POST["name"]);
  }


  if(empty($_POST["$email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <span class="error"><?php echo $nameErr ?></span><br>
    <span class="error"><?php echo $emailErr ?></span><br>
</body>
</html>