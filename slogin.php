<?php
// establishing the MySQLi connection
 $error=''; // Variable To Store Error Message
 session_start();
$con = mysqli_connect("localhost","root","","student");
if (mysqli_connect_errno())
{
	$error = "MySQLi Connection was not established:";
//echo "MySQLi Connection was not established: " . mysqli_connect_error();
}
// checking the user
if(isset($_POST['submit'])){
$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$sel_user = "select * from login where username='$username' AND password='$password'";
$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);
if($check_user>0){

$_SESSION['username']=$username;
//echo $_SESSION['username'];
header("location: ruindex.php");
}
else {
//$error = "Username or Password is invalid";
echo "Email or password is not correct, go back & try again!";
}
}
?>