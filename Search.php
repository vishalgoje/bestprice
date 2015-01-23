<?php

$conn = mysqli_connect("localhost","root","","bestprice");
$output = '';

if(isset($_POST['search']))
{
$searchq = $_POST['search'];

$searchq = preg_replace("#[^0-9a-z]#i","", $searchq);

$sel_user="select * from products where productname LIKE '%$searchq%' ";
$ses_sql  = mysqli_query($conn,$sel_user);

$count = mysqli_num_rows($ses_sql);
	if($count == 0)
    {
		$output = 'No Matches found !!!!!!!!!!!';
	}
    else
    {
		while ($row = mysqli_fetch_assoc($ses_sql)) {
			$productname = $row['productname'];
			$price = $row['price'];

			$output .= 'div'.$productname.''.$price.'</div>';
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    
    </head>
    <body>

    	<form action="Search.php" method="post">

    			<input type="text" name="search" placeholder="Search"/>
    			<input type="submit" value="search"/>
    	</form>

    	<?php print("$output"); ?>

    </body>
    </html>