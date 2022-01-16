<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$con=mysql_connect("localhost","root","");
$d=mysql_select_db("silkmuseum",$con);
$q2=mysql_query("insert into contact values('$name','$email','$subject','$message')");
echo "<script type='text/javascript'>alert('Thank You For Your Feedback.');</script>";
?>
