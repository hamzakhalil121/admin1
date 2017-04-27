<?php
require("../requires/connection.php"); 

$username=$_POST['username']; 
$userpassword=$_POST['password']; 

		// To protect MySQL injection (more detail about MySQL injection)
		//$encriptedPass=md5($userpassword);
	//	echo"1";
		$sql="SELECT * FROM tblusers WHERE username='".$username."' AND userpassword='".$userpassword."' ";
	//	echo"2";
		$result=mysqli_query($connection,$sql);
//		echo"3";
		// Mysql_num_row is counting table row
		$count=mysqli_num_rows($result);
	//	echo"4";
		// If result matched $myuseqrname and $mypassword, table row must be 1 row
		if($count == 1)
		{
		//	echo"5";
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		session_start();
		
		$_SESSION['username'] = $username;
	//	$_SESSION['userpassword']=$encriptedPass;
		
		header("Location: Welcome.php");
		exit( );
		}
		else 
		{
		echo "Wrong Username or Password";
		}


?>