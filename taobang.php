<?php
include 'connect.php';
$query="CREATE TABLE thong_tin_khach_hang ( id INT   NOT NULL,
 hoten VARCHAR(64)  NULL ,
tendangnhap varchar(64)  NULL,
 email varchar(64)  NULL,
PRIMARY KEY (id) )";
 $result=mysqli_query($con,$query);
if($result){
echo "table created";
 }else{
 	echo mysqli_error($con);
 }
 mysqli_close($con);
 ?>