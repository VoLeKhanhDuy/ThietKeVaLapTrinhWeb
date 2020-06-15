
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng nhập hệ thống</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <!-- Link cho form -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
  
</head>
<body>

    <form action="xu_ly_dang_nhap.php" method = "post">
        <div class="main">
            <div class="main-w3l">
                <h1 class="logo-w3">QUẢN LÝ SINH VIÊN</h1>
                <div class="w3layouts-main">
                    <h2><span>Đăng nhập</span></h2>
                        <form action="#" method="post">
                            <input placeholder="Tên đăng nhập" name="tendn" type="text" id="tendn">
                            <input placeholder="Mật khẩu" name="matkhau" type="password" id="matkhau">
                            <input type="submit" value="Đăng nhập" name="sbLogin">
                            <input type="reset" value="Nhập lại" name="rsReset">
                        </form>
                        <h6><a href="#">Quên mật khẩu</a></h6>
                </div>
                
            </div>
        </div>
    </form>
  



</body>
</html>
