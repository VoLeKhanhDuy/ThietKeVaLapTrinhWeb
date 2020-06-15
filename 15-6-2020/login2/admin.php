<?php
	session_start();
	if(!isset($_SESSION["name"]))
	{
		header("Location:form_login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản trị hệ thống</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<!-- <?php
	
	echo "<p>Xin chào ".$_SESSION["name"]."</p>";
?>

	 -->

<!--Tạo Navigation bar-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">QLSV</a>

    <!-- Links -->
    <ul class="navbar-nav ml-auto ">
        <?php
            if($_SESSION["role"] == 1) {
        ?>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbardrop" data-toggle="dropdown">
            Cập nhật dữ liệu
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Ngành học</a>
            <a class="dropdown-item" href="#">Lớp học</a>
            <a class="dropdown-item" href="#">Sinh viên</a>
            <a class="dropdown-item" href="#">Môn học</a>
            <a class="dropdown-item" href="#">Kết quả học tập</a>
        </div>
        </li>
        <?php
        }
        ?>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbardrop" data-toggle="dropdown">
                Thống kê
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Theo lớp</a>
                <a class="dropdown-item" href="#">Theo môn</a>
                <a class="dropdown-item" href="#">Theo ngành</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#">Xem thông tin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="xu_ly_dang_xuat.php?logout=1">Đăng xuất</a>
        </li>

    </ul>
</nav>








</body>
</html>
