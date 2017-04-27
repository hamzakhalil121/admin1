<?php
 require("../requires/connection.php");
$productId	= $_POST['productId'];
$productName	= $_POST['productName']; 
$productPrice	= $_POST['productPrice']; 
$productCode	= $_POST['productCode']; 
$productDiscount= $_POST['productDiscount']; 
$productSizes	= $_POST['productSizes']; 
$productDetails	= $_POST['productDetails'];
$picture        = $_FILES['picture']['name'];
$picture_tmp 	= $_FILES['picture']['tmp_name'];

//$newName = $productName."-".$picture;
/*
if($picture != "")
{
	move_upload_file($_FILES['picture']['tmp_name'], '../ProjectImages/uploads/'.$newName);	
}
*/
$sql = "INSERT INTO `tblproducts`  SET productId='$productId' ,productName='$productName',  productPrice='$productPrice',  productCode='$productCode',productDiscount='$productDiscount',  productSizes='$productSizes', productDetails='$productDetails', picture='$picture' ";

$result = mysqli_query($connection,$sql);
 
if(!$result)
{	
  die('Could not enter data: ' . mysqli_error());
}
else{
 	move_uploaded_file($picture_tmp, '../ProjectImages/uploads/'.$picture);
	header("Location: add_product.php?status=yes");
}

mysqli_close($connection);
?>