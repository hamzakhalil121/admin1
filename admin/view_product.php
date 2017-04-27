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
         <td width="10%"><a href="add_product.php" style="color:#000" >Add Product</a></td>
         <td width="10%"><a href="view_product.php" style="color:#000" >View Product</a></td>
		 <!--<td width="10%"><a href="delete_product.php" style="color:#000" >Delete Product</a></td> -->
         <!--<td width="10%"><a href="edit-product.php" 	style="color:#000" >Edit Product</a></td> -->
         <td width="10%"><a href="logout.php" 	style="color:#000" >Logout</a></td>
	  </tr>
	</table>

	</td>
  </tr>
  <tr>
    <td height="463" align="center" valign="middle">
			<table> 
			<tr>
			<td height="33" colspan="2" style="font-weight:bold" >
                            <?php 
                            if($_GET)
			
                                {
				
                 if($_GET['status']=='updated') echo "<span style='color:green'>Record Successfully Updated!</span>";
				
                elseif($_GET['status']=='deleted') echo "<span style='color:green'>Record Successfully Deleted!</span>"; 
				
                   else "<span style='color:red'>Sorry There is some issue, Try Again</span>"; 
				
                                }?></td>
			</tr>
			</table>
			
			<table width="100%" border="0">
			  <tr>
				<td style="border-bottom:1px solid" width="10%"><strong>ProductId</strong></td>
				<td style="border-bottom:1px solid" width="10%"><strong>Product Name</strong></td>
				<td style="border-bottom:1px solid" width="10%"><strong>Product Price</strong></td>
				<td style="border-bottom:1px solid" width="10%"><strong>Product Code</strong></td>

                                
				<td style="border-bottom:1px solid" width="10%"><strong>Product Discount</strong></td>
				<td style="border-bottom:1px solid" width="10%"><strong>Product Size</strong></td>
                                
				<td style="border-bottom:1px solid" width="10%"><strong>Product details</strong></td>
                <td style="border-bottom:1px solid" width="10%"><strong>Pictures</strong></td>
                                
				<td style="border-bottom:1px solid" width="10%"><strong>Operations</strong></td>
			  </tr>
			  

	<?php	
	
		$sql="SELECT * FROM tblproducts";
		$result=mysqli_query($connection,$sql);
		$count=mysqli_num_rows($result);
	
		if ($count > 0) 
		{
			while($row = mysqli_fetch_array($result))
			{
			?>
                          
			<tr style="border-bottom:1px solid">
            <td style="border-bottom:1px solid"> <?php echo $row["productId"]; ?> </td>
			<td style="border-bottom:1px solid"><?php echo $row["productName"]; ?></td>
			<td style="border-bottom:1px solid"><?php echo $row["productPrice"]; ?></td>
			<td style="border-bottom:1px solid"><?php echo $row["productCode"]; ?></td>
			
			<td style="border-bottom:1px solid"><?php echo $row["productDiscount"]; ?></td>
			<td style="border-bottom:1px solid"><?php echo $row["productSizes"]; ?></td>
			<td style="border-bottom:1px solid"><?php echo $row["productDetails"]; ?></td>
            <td style="border-bottom:1px solid"><img src="../ProjectImages/uploads/<?=$row["picture"]?>" height="50" width="50"/></td>
			<td style="border-bottom:1px solid">
            <a href="edit-product.php?productId=<?php echo $row["productId"]; ?>">Edit</a>  
			<a href="delete_product.php?productId=<?php echo $row["productId"]; ?>">Delete</a></td>
		  </tr>
			<?php
			}
		} 
	?>
	
			
			</table>
	</td>
  </tr>
</table>
</form>
	
	</td>
  </tr>
</table>
<?php } ?>