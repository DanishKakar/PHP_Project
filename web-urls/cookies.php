
<?php

$name = "DanishKakar";
$value = 100;
$expiration = time() + (60 * 60 * 24);

setcookie($name, $value, $expiration);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php

        if(isset($_COOKIE)) {
            echo $_COOKIE[$name];
        } else {
            echo "";
        }
    ?>
</body>
</html>