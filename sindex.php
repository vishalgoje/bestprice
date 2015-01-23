<style type="text/css">
.container{ width:600px; margin:0 auto;}
.show{ width:300px; margin:0 auto; margin-bottom:10px; padding:10px; border:1px #999 solid; }
.show:hover{border-bottom:1px #999 dotted; }
.action { float:right;}
.name { text-transform:capitalize; margin-bottom:25px; }
.name, .action { font-size:18px; font-family:Tahoma, Geneva, sans-serif; color:#09F; font-weight:bold; }
a { text-decoration:none; font-family:Tahoma, Geneva, sans-serif; color:#F00; font-size:10px;}
</style>

<div class="container">
<?php
//include('db.php');
$conn = mysqli_connect("localhost","root","","bestprice");
 $sel_user="select * from addtocart where email='sashi@gmail.com'";
 
$ses_sql  = mysqli_query($conn,$sel_user);
while($row = mysqli_fetch_assoc($ses_sql))
{
$id1=$row['id'];

$pname=$row['pname'];
$item=$row['item'];
$rs=$row['rs'];
$quantity=$row['quantity'];

?>

	<div class="show">
	<span class="name"><?php echo $pname;  ?></span>
	<span class="action"><a href="#" id="<?php echo $id1; ?>" class="delete" title="Delete">X</a></span>
	</div>

<?php
}
?> 
</div>
<script src="jquery.js"></script>
<script type="text/javascript">
$(function() {
$(".delete").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
   type: "POST",
   url: "sdelete.php",
   data: info,
   success: function(){
 }
});
  $(this).parents(".show").animate({ backgroundColor: "#003" }, "slow")
  .animate({ opacity: "hide" }, "slow");
 }
return false;
});
});
</script>