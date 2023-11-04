<?php
// require_once ('login.php');  


// setcookie("Auction_Item", "rena", time() + (86400*30),"/");

if (!isset($_COOKIE["login"])) {
    echo "You must log in first.";
} else{
    echo "ana sehve";

}


?>

