<?php 
$m='haha';


$con= mysqli_connect("localhost", "root","");
if($con){echo "connect succes";}
else
{
	echo "connect failed".mysqli_connect_error();}
// 
 $sql="CREATE DATABASE tongtinkh";
 if($con->query($sql))
 	{echo "creat database succes";
}
mysqli_select_db($con,"tongtinkh");


 
 ?>
