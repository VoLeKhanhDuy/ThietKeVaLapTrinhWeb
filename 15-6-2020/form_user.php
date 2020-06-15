<?php
	include_once("ket_noi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	$ten = $mk = $hinh = "";
	$quyen = 1;
	
	if(isset($_POST["sbThem"]))
	{
		//Lấy dữ liệu từ form
		$ten = $_POST["tendn"];
		$mk =  md5($_POST["matkhau"]);
		
		//Xử lý upload file và lấy tên file từ form
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
		
		// Check if file already exists
		if (file_exists($target_file)) {
		  echo "Sorry, file already exists.";
		  $uploadOk = 0;
		}

		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		  echo "Sorry, your file is too large.";
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		  $uploadOk = 0;
		}
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			//Được phép upload
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				$hinh = $_FILES["fileToUpload"]["name"];
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		
		
		//Viết câu truy vấn
		$sql = "insert into user(tendangnhap, matkhau, quyen, hinh)values('$ten','$mk','$quyen','$hinh')";
		
		//Thực thi
		if ($conn->query($sql) === TRUE) {
		  	echo "New record created successfully";
		} else {
		  	echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
?>


<div class="container">
  <h2>FORM USER</h2>
  <form action="" method = "post" enctype="multipart/form-data"	>
    <div class="form-group">
      <label for="tendn">Tên đăng nhập</label>
      <input type="text" class="form-control" id="tendn" placeholder="Nhập tên đăng nhập" name="tendn">
    </div>
    <div class="form-group">
      <label for="matkhau">Password:</label>
      <input type="password" class="form-control" id="matkhau" placeholder="Nhập mật khẩu" name="matkhau">
    </div>
    
	<div class="form-group">
      <label for="email">Chọn hình ảnh:</label>
	  <input type="file" name="fileToUpload" id="fileToUpload">
	</div>
    <button type="submit" name = "sbThem" class="btn btn-primary">Thêm</button>
  </form>
</div>

<?php
	$sql = "select * from user";
	
	$rs = $conn->query($sql);
	
	if($rs->num_rows>0)
	{
		//Đã tồn tại record thì lấy dữ liệu từng row và show từng trường
		while($row = $rs->fetch_assoc())
		{
			echo "Tên đăng nhập: ".$row["tendangnhap"]."<br>";
			echo "<img src = 'uploads/".$row["hinh"]."'>";
			
		}
	}
	else
	{
		
		echo "0 record.";
	}
	
?>



<?php
	$conn->close();
?>
</body>
</html>
