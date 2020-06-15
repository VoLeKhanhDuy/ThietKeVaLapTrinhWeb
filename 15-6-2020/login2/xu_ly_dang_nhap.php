<?php
session_start();
//Kết nối cơ sở dữ liệu
include_once("../ket_noi.php");

//Lấy dữ liệu từ form
$ten = $mk = "";

if(isset($_POST["sbLogin"]))
{
	$ten = $_POST["tendn"];
	$mk = md5($_POST["matkhau"]);
	
	
	//Viết truy vấn
	$sql = "select *from user where tendangnhap = '$ten' and matkhau = '$mk'";

	//Thực thi
	$rs = $conn->query($sql);

	if($rs->num_rows>0)
	{
		$row = $rs->fetch_assoc();
		$_SESSION["name"] = $ten;
		$_SESSION["role"] = $row["quyen"];
		header("Location:admin.php");
	}
	else
	{
		header("Location:form_login.php");
	}
}



//Đóng kết nối

?>