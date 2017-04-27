<?php
require("../requires/connection.php");

$productId= $_GET['productId']; 


$sql = "DELETE from tblproducts WHERE productId='$productId' ";

//mysql_select_db('test_db');
 
$result = mysqli_query($connection,$sql);
 
if(!$result)
{
  die('Could not enter data: ' . mysqli_error());
}
 
	header("Location: view_product.php?status=deleted");
 

mysqli_close($connection);
?>