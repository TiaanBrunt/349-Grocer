<?php

session_start();
$db_host   = '192.168.2.12';
$db_name   = 'fvision';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';
$db = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);    

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM orders WHERE orderID=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: orders.php');
}
?>