
<?php
//adatbázis adatok

$db = new mysqli("localhost", "root", "Faszom200", "shop") or die("Cannot connect");


$shop_name = "PetyaShop";

$theme = "light";

//copyright information
$year = date("Y");
$copyright = $year . " | PetyaShop, All rights reserved! ";


//support email, address
$support_email = "info@petyashop.ga";
$address = "Test Street 22";

//developer credit, please keep so you can support me
$developer = "Made by Peter Till with ❤";

?>

