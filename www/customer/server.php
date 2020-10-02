<?php
session_start();
$db_host   = '192.168.2.12';
$db_name   = 'fvision';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';
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
//delete values from cart
if (isset($_GET['del'])) {
    $name = $_GET['del'];
    //delete value from cart
	mysqli_query($db, "DELETE FROM cart WHERE productName='$name'");
	header('location: index.php');
}



?>