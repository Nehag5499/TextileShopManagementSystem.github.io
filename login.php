<?php
//include["config.php"];
$con=mysql_connect("localhost","root","");
$d=mysql_select_db("silkmuseum",$con);

$q=mysql_query("select * from tbladministrator");
 $username = $_POST['username'];
$password = $_POST['password'];
$n=0;
while($row=mysql_fetch_array($q))
{
	if ($row[1]==$username&&$row[2]==$password)
	$n=1;
}
if($n=1)
{
	header('Location:admin.html');
}
else
 echo "<i>Username password missmatch</i>";
 ?>


