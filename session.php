<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysql_connect("localhost", "root", "");
$connection = mysqli_connect("localhost","root","","student");
$con = mysqli_connect("localhost","root","","bestprice");
// Selecting Database
//$db = mysql_select_db("company", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['username'];
// SQL Query To Fetch Complete Information Of User
//$ses_sql=mysql_query("select username from login where username='$user_check'", $connection);
$sel_user = "select * from login where username='$user_check'";
$ses_sql = mysqli_query($connection, $sel_user);

$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
$email=$row['email'];

                                             $sum=0;
                                            $sel_user1 = "select * from addtocart where email='$email'";

                                            $ses_sql1  = mysqli_query($con,$sel_user1);
                                            while($row1 = mysqli_fetch_assoc($ses_sql1))
                                            {
	                                            $rs=$row1['rs'];
	                                            $quantity=$row1['quantity'];
	                                            $pq=$rs * $quantity;
	                                            $sum=$sum+$pq;
                                            }

$sum=$sum+40;

if(!isset($login_session)){
mysql_close($connection); // Closing Connection
echo "bye";
//header('Location: index.php'); // Redirecting To Home Page
}
?>