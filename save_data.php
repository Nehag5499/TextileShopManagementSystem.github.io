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

$sql = "INSERT INTO product VALUES(null,'$pname','$ptype','$color',$quantity,$price,'$brand')";

if (mysql_query($sql))
{
	header('location:products1.php');
}
else
{
	die('Unable to insert data:' .mysql_error());
}

?>