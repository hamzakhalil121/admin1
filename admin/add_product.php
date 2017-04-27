<?php 
	require("../requires/connection.php");
	session_start();
	if(!isset($_SESSION['username'])){
	header("Location: index.php");
	exit;
}
else{
 
?>
<table width="80%" border="1" align="center">
  <tr>
    <td>
	<table width="100%" border="0" style="font-weight:bold; ">
	   <tr>
		<td width="10%"><a href="add_product.php" style="color: #000" >Add Product</a></td>
		<td width="12%"><a href="view_product.php" 	style="color:#000" >View Product</a></td>
         <!--<td width="10%"><a href="delete_product.php" style="color:#000" >Delete Product</a></td>-->
         <!--<td width="10%"><a href="edit-product.php" 	style="color:#000" >Edit Product</a></td>-->
         <td width="10%"><a href="logout.php" 	style="color:#000" >Logout</a></td>
	  </tr>
	</table>

	</td>
  </tr>
  <tr>
    <td height="463" align="center" valign="middle">
        <form name="myform" action="add_product_process.php" method="post" enctype="multipart/form-data">
	<table width="80%" border="0">
  <tr>
    <td height="33" colspan="2" style="font-weight:bold" ><?php 
									if($_GET)
									{
									if($_GET['status']=='yes') echo "<span style='color:blue'>PRODUCT ADDED Successfully!</span>"; 
									else "<span style='color:red'>Sorry There is some issue, Try Again</span>"; 
									}?></td>
  </tr>
   <tr>
    <td height="34" colspan="2"><strong>Add PRODUCT Record</strong></td>
  </tr>
  <tr>
    <td>Product ID</td>
    <td><input type="text" name="productId" /></td>
  </tr>
  <tr>
    <td>Product Name</td>
    <td><input type="text" name="productName"  /></td>
  </tr>
   <tr>
    <td>Product price</td>
    <td><input type="text" name="productPrice" value="" /></td>
  </tr>
   <tr>
    <td>Product code</td>
    <td><input type="text" name="productCode" value="" /></td>
  </tr>
   <tr>
    <td>Product Discount</td>
    <td><input type="text" name="productDiscount" value="" /></td>
  </tr>
   <tr>
    <td>Product SIZE</td>
    <td><input type="text" name="productSizes" value="" /></td>
  </tr>
    <tr>
    <td>Product Details</td>
    <td><input type="text" name="productDetails" value="" /></td>
  </tr>
	<tr>
    	<td valign="top">picture</td>
        <td valign="top"><input type="file" value="" name="picture"/></td>
    </tr>
   
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="AddProduct" /></td>
  </tr>
</table>
</form>
	
	</td>
  </tr>
  <tr>
    <td align="center" >Copyright ProjectDatabase</td>
  </tr>
</table>
<?php } ?>