<?php
$r=$_GET['r'];
$con=mysql_connect("localhost","root","");
$d=mysql_select_db("silkmuseum",$con);
if($r==1)

{
header("location:pinsert.html");
}
/*$q2=mysql_query("insert into emp_slip_18 values($a_no,'$a_name','$d_join',$d_sal,'$d_add')");
echo"<center><b><h2> Value inserted successfully----!!!</h2></b></center>"*/
else if($r==2)
{
header("location:pupdate.html");
}
/*else if($r==4)
{
$q4=mysql_query("select * from emp_slip_18");
echo"<center>";
echo"<table border=1 width=30% height=20%>";
echo"<h2><tr><td><b>Emp no</b></td><td><b>Emp name</b></td><td><b> Date Of Joining</b></td><td><b>Salary</b></td><td><b>Address</b></td></tr></h2>";
while($row=mysql_fetch_array($q4))

{
echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
}
echo"</table>";
echo"</center>";
}*/
?>
