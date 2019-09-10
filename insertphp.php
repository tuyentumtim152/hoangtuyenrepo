<?php

include 'connect.php';
$con= mysqli_connect("localhost", "root","","tongtinkh");


if(isset($_POST['submit'])){
	 $hoten=$_POST['hoten'];
	 $tendangnhap=$_POST['tendangnhap'];
	 $email=$_POST['email'];
	 $pass=$_POST['pass'];
	 $pass=md5($pass);
}
 $sql="INSERT INTO thong_tin_khach_hang(hoten,tendangnhap,email,pass) VALUES ('$hoten','$tendangnhap','$email','$pass')";


function  themkhachhang($con,$hoten,$tendangnhap,$email,$pass,$sql){
	if(mysqli_query($con,$sql)){
	    echo '<br>';
		echo "row inserted <br/>";
	}
	else echo mysqli_error($con)."<br/>";

}
if($hoten=""||$tendangnhap=""||$email=""||$pass=""){
	echo "xin hay nhap day du thong tin";
}
else themkhachhang($con,$hoten,$tendangnhap,$email,$pass,$sql);

?>
<?php {}
?>