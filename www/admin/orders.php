<?php
           $db_host   = '192.168.2.12';
           $db_name   = 'fvision';
           $db_user   = 'webuser';
           $db_passwd = 'insecure_db_pw';
           $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
           $pdo = new PDO($pdo_dsn, $db_user, $db_passwd);    
?>
<?php  include('server.php'); ?>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
  <head><title>COSC349 Grocer</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


  </head>

  <body>
  <nav class="navtop">
			<div>
				<h1>349 Grocer</h1>
				<a href="login.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
    <br>
    <br>
    <br>
    <div id = "orderTable">
    <table border="1">
    <caption>Orders</caption>

      <tr><th>Order ID</th><th>Order Item</th><th>Total</th><th></th></tr>

    <?php         
        $q = $pdo->query("SELECT * FROM orders");
        while($row = $q->fetch()) {
          ?>
        <td><?php echo $row['orderID']; ?></td>
        <td><?php echo $row['orderItems']; ?></td>
        <td><?php echo $row['total']; ?></td>
        <td>
				<a href="server.php?del=<?php echo $row['orderID']; ?>" class="del_btn">Delete</a>
			</td>
      </tr>
      <?php } ?>
      

    </table>
        </div>
    <br>
    <br>
    <br>
    <div id= "productTable">
    <table border="1">
    <caption>Products</caption>

      <tr><th>Product ID</th><th>Quantity In Stock</th><th>Product Name</th><th>Price</th></tr>

    <?php         
        $x = $pdo->query("SELECT * FROM product");
        while($row = $x->fetch()) {
        echo "<tr><td>".$row["productID"]."</td><td>".$row["quantity"]."</td><td>".$row["productName"]."</td><td>".$row["price"]."</td></tr>\n";
        }
      ?>

    </table>
      </div>

      

  </body>
</html>
