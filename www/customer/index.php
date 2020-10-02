<?php
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>349 Grocer Store</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h1>COSC349 Grocer</h1>
    <br>
    <br>
    <br>
    <div id='productTable'>
    <table border="1">
      <caption>Products</caption>
      <tr><th>Product Name</th><th>Price</th><th>Quantity</th><th> </th></tr>

    <?php         
        $q = $pdo->query("SELECT * FROM product");
        while($row = $q->fetch()) {
          ?>
        <td><?php echo $row['productName']; ?></td>
        <td id ="price"><?php echo $row['price']; ?></td>
        <td id="quan">
        <select >
<?php
    for ($i=1; $i<=10; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</td>
</select>       
        <td>
				<a href="server.php?add=<?php echo $row['productName'];?> & q=1 & p=<?php echo $row['price'];?>" class="add_btn">Add</a>
			</td>
      </tr>
      <?php } ?>
      </table>
    </div>

    <br>
    <br>
    <br>
    <div id="cartTable">
    <table border="1">
    <caption>Cart</caption>

      <tr><th>Product Name</th><th>Quantity</th><th>Price</th><th> </th><th> </th></tr>

      <?php         
        $q = $pdo->query("SELECT * FROM cart");
        while($row = $q->fetch()) {
          ?>
        <td><?php echo $row['productName']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td>
				<a href="server.php?del=<?php echo $row['productName']; ?>" class="del_btn">Remove</a>
			  </td>
        <td>
				<a href="server.php?name=<?php echo $row['productName']; ?> & price= <?php echo $row['price']; ?>" class="order_btn">Order</a>
			  </td>
        </tr>
        <?php } ?>
        </table>
        </div>
</body>

</html>
