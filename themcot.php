<?php
include 'connect.php';
if(mysqli_query($con,"ALTER TABLE thong_tin_khach_hang ADD pass INT NOT NULL AFTER email"))
{
	echo "them thanh cong";
} 
?>