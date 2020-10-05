<?php

session_start();
$db_host   = "grocer349db.caliixp9chku.us-east-1.rds.amazonaws.com";
$db_name   = "Grocer";
$db_user   = "admin";
$db_passwd = "Quack1nce4^";
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