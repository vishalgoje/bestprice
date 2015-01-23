<?php
// establishing the MySQLi connection\
$error='';
$con = mysqli_connect("localhost","root","","student");
if (mysqli_connect_errno())
{
	$error = "!* MySQLi Connection was not established *!";
//echo "MySQLi Connection was not established: " . mysqli_connect_error();
}
// checking the user
if(isset($_POST['submit']))
{
	$username = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$sel_user = "select * from login where email='$email'";
	$run_user = mysqli_query($con, $sel_user);

	$check_user = mysqli_num_rows($run_user);
	if($check_user>0)
	{
	//echo $_SESSION['username'];
    	$error = "!* Email already exists *!";
	//header("location: ruindex.php");
    }
    else 
    {
		//$error = "sucessfuly registered";
		$sql="INSERT INTO  login (username, password, email) VALUES ('".$_POST['username']."','".$_POST['password']."', '".$_POST['email']."')";
		if (mysqli_query($con,$sql))
		{
		  $error = "!* sucessfully registered *!";
		}
		else
		{
		   echo "registration failed";
		}
    }
}
?>