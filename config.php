<?php 
$con=mysql_connect("localhost","root","") 
		or die("I cannot connect");      //echo "connected successfuly";
$d=mysql_select_db("silkmuseum",$con); 
?>