<?php

// establishing the MySQLi connection\
$con = mysqli_connect("localhost","root","","bestprice");
if (mysqli_connect_errno())
{
	echo  "!* MySQLi Connection was not established *!";
//echo "MySQLi Connection was not established: " . mysqli_connect_error();
}
// checking the user
if(isset($_POST['submit']))
{
	$email= mysqli_real_escape_string($con,$_POST['email']);
	$item = mysqli_real_escape_string($con,$_POST['item']);
	$rs = mysqli_real_escape_string($con,$_POST['rs']);
	$pname = mysqli_real_escape_string($con,$_POST['pname']);
	$quantity = $_POST['quantity'];
	
		//$error = "sucessfuly registered";
		$sql="INSERT INTO  addtocart (email, item, rs, pname, quantity) VALUES ('".$_POST['email']."','".$_POST['item']."', '".$_POST['rs']."','".$_POST['pname']."','".$_POST['quantity']."')";
		if (mysqli_query($con,$sql))
		{
		  header("Location: ruindex.php");
		}
		else
		{
		   echo "registration failed";
		}
    }
?>