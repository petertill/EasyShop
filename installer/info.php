<?php

$shopname = $_POST['shop-name'];
$shopdesc = $_POST['shop-desc'];
$email = $_POST['support-email'];
$addr = $_POST['addr'];

$dbhost = $_POST['db-host'];
$dbuser = $_POST['db-user'];
$dbpw = $_POST['db-pw'];
$db = $_POST['db'];

$adminuser = $_POST['admin-user'];
$adminpw = $_POST['admin-pw'];

$path = $_SERVER['DOCUMENT_ROOT'] . "/kosarteszt/config/config.php";
$removepath =  "../remove-installer.php";


$myfile = fopen($path, "w") or die("Unable to open file!");
$txt = '
<?php
//adatbázis adatok

$db = new mysqli("'. $dbhost .'", "'. $dbuser .'", "'. $dbpw .'", "'. $db .'") or die("Cannot connect");


$shop_name = "'. $shopname.'";

$theme = "light";

//copyright information
$year = date("Y");
$copyright = $year . " | ' . $shopname. ', All rights reserved! ";


//support email, address
$support_email = "'. $email .'";
$address = "'. $addr.'";

//developer credit, please keep so you can support me
$developer = "Made by Peter Till with ❤";

?>

';
fwrite($myfile, $txt);
?>
Installation successful! Now you can log into the admin panel with your provided admin username and password at https://www.yourwebsite.com/admin/. Now, for safety reasons, click <a href="<?php echo $removepath; ?>">this</a> link to remove the installer so no one can modify your admin password except you from the config directory at your web server.
