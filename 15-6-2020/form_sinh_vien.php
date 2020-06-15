<?php 
	include_once "ket_noi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Form Sinh Viên</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container border" style="width: 450px; margin-top: 20px">
        <form action="" method="POST">
            
            <legend>Form Sinh Viên</legend>
            <label for="chonLop">Chọn lớp:</label><br>
            <select name="chonLop" id="chonLop" style="width: 100%;" name="nganh" id="nganh" class="form-control">
                <!-- Đổ dữ liệu -->
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            
            
            <label for="maSo">Mã số:</label><br>
            <input type="text" id="maSo" name="maSo" class="form-control">

            <label for="hoTen">Họ Tên:</label><br>
            <input type="text" id="hoTen" name="hoTen" class="form-control">

            <label for="queQuan">Quê quán:</label><br>
            <input type="text" id="queQuan" name="queQuan" class="form-control">

            <label>Giới tính:</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Nam</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Nữ</label><br>

            <label for="birthday">Ngày sinh:</label><br>
            <input type="date" id="birthday" name="birthday" class="form-control">

            <form action="upload.php" method="post" enctype="multipart/form-data">
                Hình ảnh:
                <div class="form-group">
                <input type="file" name="fileToUpload" id="fileToUpload" >
                <input type="submit" value="Upload Image" name="submit">
                </div>
            </form>

        
                <input type="submit" value="Thêm" class="btn btn-success" name="btnThemSV">
                <input type="submit" value="Hủy" class="btn btn-danger" name="btnHuySV">
          
        </form>   
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>