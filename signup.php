<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$con=mysql_connect("localhost","root","");
$d=mysql_select_db("silkmuseum",$con);
$q2=mysql_query("insert into customer_details values('$name','$email','$password','$cpassword',$contact,'$city','$address')");
header('location:index.html');

echo "<script type='text/javascript'>alert('Signup Successfull');</script>";


?>