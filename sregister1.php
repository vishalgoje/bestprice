<?php
include("../includes/db.php");

$sql = "SELECT email FROM lf_clients WHERE email = " .$_POST['email'];
$select = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($select);

if (mysqli_num_rows > 0) {
    echo "exist";
}else echo 'notexist';
?>