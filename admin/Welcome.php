<?php
@require("../requires/connection.php"); 

session_start();
if(!isset($_SESSION['username'])){
	header("Location: index.php");
	exit;
}
else{

?>
<table width="80%" border="1" align="center">
  <br><br><br><br><br><br>
  <tr>
    <td>
	<table width="100%" border="0" style="font-weight:bold; ">
	  <tr>
		<td width="10%"><a href="add_product.php" style="color: #000" >Add Product</a></td>
		<td width="10%"><a href="view_product.php" 	style="color:#000" >View Product</a></td>
       <!-- <td width="10%"><a href="delete_product.php" 	style="color:#000" >Delete Product</a></td> -->
        <!--<td width="10%"><a href="edit-product.php" 	style="color:#000" >Edit Product</a></td> -->
        <td width="10%"><a href="logout.php" 	style="color:#000" >Logout</a></td>
	  </tr>
	</table>

	</td>
  </tr>
  <tr>
    <td height="291" align="center" valign="middle">WELCOME TO HOME PAGE</td>
  </tr>
  <tr>
    <td align="center" >Copyright ProjectDatabase</td>
  </tr>
</table>
<?php } ?>