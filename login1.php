<?php
 $email = $_POST['email'];
$password = $_POST['password'];

$con=mysql_connect("localhost","root","");
$d=mysql_select_db("silkmuseum",$con);


$sql = "SELECT * FROM customer_details WHERE email='$email' and password='$password'";
$result =mysql_query($sql);

$num = mysql_num_rows($result);

if($num==1)
{
  session_start();
  $_SESSION['password'] = $password;
   $_SESSION['msg'] = '<h2>Welcome</h2>';
  header('location:index.html');
}
else
{
  session_start();
  $_SESSION['msg'] = '<h2>Invalid emailId or password!</h2>';
  header('location:login.html');
}
?>
