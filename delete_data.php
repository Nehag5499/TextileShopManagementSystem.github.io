<?php
if(isset($_GET['pno'])){ $pno = $_GET['pno']; }


$con=mysql_connect("localhost","root","");
$d=mysql_select_db("silkmuseum",$con);


$sql = "DELETE FROM product WHERE pno='$pno'";
if(mysql_query($sql))
{
	header('location:products1.php');
}
else
{
	die('Could not delete record:' .mysql_error());
}
?>