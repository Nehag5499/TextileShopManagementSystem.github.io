<?php
    $con=mysql_connect("localhost","root","");
$d=mysql_select_db("silkmuseum",$con);
    //require 'header.php';
    session_start();
    $pno=$_GET['pno'];
    $cno=$_SESSION['cno'];
    $q="insert into sales(cno,pno,status) values ('$cno','$pno','confirmed')";
    echo"<p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>";
?>