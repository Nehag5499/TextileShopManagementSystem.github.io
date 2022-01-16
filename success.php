<?php
    session_start();
   $con=mysql_connect("localhost","root","");
$d=mysql_select_db("silkmuseum",$con);
 
    if(!isset($_SESSION['email'])){
        echo "something went wrong";
    }else{
        $email=$_GET['email'];
		$pno=$_GET['pno'];
        $confirm_query="update sales set status='Confirmed' and pno=$pno where email=$email";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
		echo "Your order is confirmed. Thank you for shopping with us.";
        
    }
?>