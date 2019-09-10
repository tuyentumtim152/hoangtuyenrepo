<?php
include 'connect.php';
function  themkhachhang($hoten,$tendangnhap,$email,$pass){
	$result=mysqli_query($sql,"insert into thong_tin_khach_hang values ($hoten,$tendangnhap,$email,ENCRYPT($pass))");
	if ($result){
		echo "row inserted <br/>";
	}
	else echo mysqli_error($con)."<br/>";

}

?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	div {
		border-radius:  5px;
		background-color: #f2f2f2;
		padding:50px;
		margin-left: 25%;
		margin-right: 25%;

	} 
	i i {
		color:green;
	}

	}
</style>
	<title></title>
</head>
<body>
<div>
<form action="insert.php" class="form">
<i textalign="center"> them khach hang vao bang <i color="green">"thong_tin_khack_hang"</i></i>
<br>Ho ten: <br>
<input type="text" name="hoten" value=""><br>
tendangnhap:<br>
 <input type="text" name="tendangnhap" value=""><br>
email:<br>
 <input type="email" name="email" value=""><br>
pass:<br> <input type="password" name="pass" value=""><br>
<input type="submit" value="them" name="submit">

</form></div>
<?php $hoten=$POST['hoten'];
	$tendangnhap=$POST['tendangnhap'];
	$email=$POST['email'];
	$pass=$POST['pass'];
?>
</body>
</html>
