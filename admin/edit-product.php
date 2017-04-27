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
         <td width="10%"><a href="add_product.php" 		style="color:#000" >Add Product</a></td>
         <td width="10%"><a href="view_product.php" 	style="color:#000" >View Product</a></td>
		<!--<td width="10%"><a href="delete_product.php" 	style="color:#000" >Delete Product</a></td> -->
       <!-- <td width="10%"><a href="edit-product.php" 		style="color:#000" >Edit Product</a></td> -->
        <td width="10%"><a href="logout.php" 	style="color:#000" >Logout</a></td>
	  </tr>
	</table>

	</td>
  </tr>
  <tr>
  
  <?php	
		if(isset($_GET['productId'])){
			$productId = $_GET['productId'];
		}
		
		$sql="SELECT * FROM tblproducts WHERE productId='".$productId."'";
		$result=mysqli_query($connection,$sql);
		
		$count=mysqli_num_rows($result);
			
		if ($count > 0) 
		{
			$row = mysqli_fetch_array($result);
		} 
	
	?>
	
    <td height="463" align="center" valign="middle">
        <form name="myform" action="edit_process_product.php" method="post" >
	
	<table width="80%" border="0">
 
  </tr>
   <tr>
    <td height="34" colspan="2"><strong>Edit Page Record</strong></td>
  </tr>
   <tr>

  <tr>
    <td>Product Name</td>
    <td><input type="text" name="productName" value="<?php echo $row["productName"];?>" /></td>
  </tr>
   <tr>
    <td>Product price</td>
    <td><input type="text" name="productPrice"  value="<?php echo $row["productPrice"];?>"/></td>
  </tr>
   <tr>
    <td>Product code</td>
    <td><input type="text" name="productCode"  value="<?php echo $row["productCode"];?>" /></td>
  </tr>
   <tr>
    <td>Product Discount</td>
    <td><input type="text" name="productDiscount" value="<?php echo $row["productDiscount"];?>" /></td>
  </tr>
   <tr>
    <td>Product SIZE</td>
    <td><input type="text" name="productSizes"  value="<?php echo $row["productSizes"];?>"/></td>
  </tr>
    <tr>
    <td>Product Details</td>
    <td><input type="text" name="productDetails" value="<?php echo $row["productDetails"];?>" /></td>
  </tr>

  
  <tr>
    <td>&nbsp;</td>
    <td>
    	<input type="hidden" name="productId" value="<?php echo $row['productId']; ?>" />
    	<input type="submit" name="Submit" value="EditProduct" />
    </td>
  </tr>
</table>
</form>
	
	</td>
  </tr>
  <tr>
    <td align="center" >Copyright ProjectDatabase</td>
  </tr>
</table>
<?php 
} ?>