<?php

 require("../requires/connection.php");

//$productId		= $_POST['productId']; 
$productName	= $_POST['productName']; 
$productPrice	= $_POST['productPrice']; 
$productCode	=  $_POST['productCode']; 
$productDiscount= $_POST['productDiscount']; 
$productSizes	= $_POST['productSizes']; 
$productDetails	=  $_POST['productDetails']; 
$productId	=  $_POST['productId']; 

$sql = "UPDATE tblproducts 
		SET 
			productName='$productName', 
			productPrice='$productPrice', 
			productCode='$productCode', 
			productDiscount='$productDiscount', 
			productSizes='$productSizes', 
			productDetails='$productDetails' 
			WHERE productId='$productId'";

 
$result = mysqli_query($connection,$sql);
 
if(!$result)
{
   die('Could not enter data: ' .mysqli_error($connection));
} 
	header("Location: view_product.php?status=updated");
 

mysqli_close($connection);
?>