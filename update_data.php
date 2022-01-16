<?php
$pno=$_POST['pno'];
$pname = $_POST['pname'];
$ptype = $_POST['ptype'];
$color = $_POST['color'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$brand = $_POST['brand'];
		

$con=mysql_connect("localhost","root","");
$d=mysql_select_db("silkmuseum",$con);

$sql = "UPDATE product SET  pname='$pname', ptype='$ptype', color='$color', quantity='$quantity',  price='$price', brand='$brand' WHERE pno='$Pno'";

if(mysql_query($sql))
{
	header('location:products1.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>