<?php
$pno=$_GET['pno'];
$pname=$_GET['pname'];
$ptype=$_GET['ptype'];
$color=$_GET['color'];
$quantity=$_GET['quantity'];
$price=$_GET['price'];
$brand=$_GET['brand'];
$con=mysql_connect("localhost","root","");
$d=mysql_select_db("silkmuseum",$con);
$q2=mysql_query("insert into product values($pno,'$pname','$ptype','$color','$quantity','$price','$brand')");
echo"<center><b><h2> Value inserted successfully----!!!</h2></b></center>"
?>