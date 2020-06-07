<?php 
	include_once "ket_noi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

	<!-- Code nút thêm -->
	<?php 
		if(isset($_POST['btnThem'])){
			if(isset($_POST['nganh']) && isset($_POST['maLop']) && isset($_POST['tenLop'])){
				$nganh = $_POST['nganh'];
				$maLop = $_POST['maLop'];
				$tenLop = $_POST['tenLop'];

				$sql = "insert into lop values('$maLop','$tenLop','$nganh')";
				
				if($conn->query($sql) === TRUE){
					
				} else {
					echo $conn->error;
				}
			}
		}
	?>

	<!-- Code xóa -->
	<?php 
		if(isset($_GET['ma_xoa'])){
			$maXoa = $_GET['ma_xoa'];
			

			$sql = "Delete from lop where MaLop = '$maXoa'";
			
			if($conn->query($sql) === TRUE){
				
			} else {
				echo $conn->error;
			}

		}
	?>

	<!-- Code để hiện thị dữ liệu lên form khi bấm nút sửa ở dưới bảng -->
	<?php 
		if(isset($_GET['ma_sua'])){
			$maSua = $_GET['ma_sua'];
			$sql = "select * from lop where MaLop = '$maSua'";
			$result = $conn->query($sql);
			if($result->num_rows > 0){
				$row = $result->fetch_assoc();
				$nganh_sua = $row['MaNG'];
				$maLop_sua = $row['MaLop'];
				$tenLop_sua = $row['TenLop'];
				
			}
		}
	?>

	<!-- Code nút sửa ở trên form-->
	<?php 
		if(isset($_POST['btnSua'])){
			$nganh = $_POST['nganh'];
			$maLop = $_POST['maLop'];
			$tenLop = $_POST['tenLop'];

			$sql = "update lop set MaNG = '$nganh', TenLop = '$tenLop' where MaLop = '$maLop'";

			if($conn->query($sql) === TRUE){
				
			} else {
				echo $conn->error;
			}
		}

	?>
	
	<div class="container border" style="width: 500px;">
		<form action="frm_lop_them_xoa_sua.php" method="post">
			<div class="form-group">
				<label for="nganh">Chọn ngành</label>
				<select class="form-control" style="width: 60%;" name="nganh" id="nganh">

					<!-- Đổ dữ liệu ra select  -->
					<?php
						$sql = "select * from nganh";
						$result = $conn->query($sql);
						if($result->num_rows > 0){
							while ($row = $result->fetch_assoc()){
								if($row['MaNG'] == $nganh_sua){ //hiện thị dữ liệu của select lúc bấm nút sửa dưới bảng
					?>
									<option selected value="<?php echo $row['MaNG']; ?>"><?php echo $row['TenNG']; ?></option>
					<?php 
								
								} else {
					?>
						<option value="<?php echo $row['MaNG']; ?>"><?php echo $row['TenNG']; ?></option>
					<?php 
								}
							}
						} 
					?>

				</select>
			</div>
			<div class="form-group">
				<label for="maLop">Mã lớp</label>

				<!-- Code chuyển khi bấm nút sửa ô input thành ReadOnLy -->
				<?php 
					if(isset($_GET['ma_sua'])){
				?>
					<input value="<?php if(isset($_GET['ma_sua'])) echo $maLop_sua ?>" class="form-control"  type="text" name="maLop" id="maLop" style="width: 60%;" readonly>
				<?php 
					} else {
				?>
					<input value="<?php if(isset($_GET['ma_sua'])) echo $maLop_sua ?>" class="form-control"  type="text" name="maLop" id="maLop" style="width: 60%;" required>
				<?php 

					}
				?>
				
				
			</div>
			<div class="form-group">
				<label for="tenLop">Tên lớp</label>
				<input value="<?php if(isset($_GET['ma_sua'])) echo $tenLop_sua ?>" class="form-control"  type="text" name="tenLop" id="tenLop" style="width: 60%;" required>
			</div>
			<div class="form-group text-right">
				<input type="reset" class="btn btn-danger">

				<!-- Code chuyển qua lại giữa nút thêm và nút sửa + hủy -->
				<?php 
					if(isset($_GET['ma_sua'])){
				?>
					<input type="submit" class="btn btn-success" id="btnSua" name="btnSua" value="Sửa">
					<a href="frm_lop_them_xoa_sua.php" class="btn btn-secondary">Hủy</a>
				<?php 	
					} else {
				?>
					<input type="submit" class="btn btn-success" name="btnThem" id="btnThem">
				<?php 
					}

				?>				
			</div>
		</form>
	</div>
	
	<br><br>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Mã lớp</th>
				<th>Tên lớp</th>
				<th>Mã ngành</th>
				<th>Hành động</th>
			</tr>
		</thead>
		<tbody>

			<!-- Đổ dữ liệu ra bảng -->
			<?php 
				$sql = "select * from lop";
				$result = $conn->query($sql);
				if($result->num_rows >0)
				{
					while ($row = $result->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $row['MaLop']; ?></td>
					<td><?php echo $row['TenLop']; ?></td>
					<td><?php echo $row['MaNG']; ?></td>
					<td><a href="frm_lop_them_xoa_sua.php?ma_xoa=<?php echo $row['MaLop']; ?>" class="btn btn-danger" onclick="return confirm('Ban co muon xoa khong?')">Xóa</a>
					<a href="frm_lop_them_xoa_sua.php?ma_sua=<?php echo $row['MaLop']; ?>" class="btn btn-success">Sửa</a></td>
				</tr>
			<?php 
					}
					
				}
			?>

		</tbody>
	</table>

	<?php 
		$conn->close();
	?>

</body>
</html>