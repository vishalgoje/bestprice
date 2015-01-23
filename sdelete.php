<?php
$conn = mysqli_connect("localhost","root","","bestprice");

if($_POST['id'])
{
$id=$_POST['id'];
$delete = "DELETE FROM addtocart WHERE id='$id'";
mysqli_query( $conn,$delete);
}

?>