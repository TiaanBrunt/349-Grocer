<?php
session_start();
$db_host   = "grocer349db.caliixp9chku.us-east-1.rds.amazonaws.com";
$db_name   = "Grocer";
$db_user   = "admin";
$db_passwd = "Quack1nce4^";
$db = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);    


//When the order button is pressed this is called
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $price = $_GET['price'];
    $id = rand(2, 2423);
    //insert values into orders table
    mysqli_query($db, "INSERT INTO orders VALUES ('$id','$name', '$price')");
    //once values are added remove from cart
	mysqli_query($db, "DELETE FROM cart WHERE productName='$name'");
    header('location: index.php');
        }

//add values to the cart
if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $price = $_GET['p'];
    $quantity = $_GET['q'];
    //insert values into cart
    mysqli_query($db, "INSERT INTO cart VALUES ('$id', '$quantity', '$price')");
	header('location: index.php');
}


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM orders WHERE orderID=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
}


?>