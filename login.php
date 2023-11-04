<?php

if (isset($_COOKIE["login"])) {
    echo "You must log out first.";
    ?>
    <a href="./logout.php">chixish et</a>
    <?php
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="server.php" method="post">
        Email: <input type="email" name="email" id="email">
        <br><br>
        Password: <input type="password" name="password" id="password">
        <input type="submit" value="Submit">
    </form>

</body>

</html>