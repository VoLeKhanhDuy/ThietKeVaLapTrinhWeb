<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="./stylesheets/style.css">
	<title>Thêm ngành học</title>
</head>
<body>
	<div class="wrapper-form">
		<h2>Thêm ngành học</h2>
		<hr>
		<form action="xuly-them-nganh-hoc.php" method="POST">
			<div class="form-group">
				<label for="ma-nganh">Mã ngành:</label>
				<input type="text" class="form-control" id="ma-nganh" name="ma-nganh">
			</div>
			<div class="form-group">
				<label for="ten-nganh">Tên ngành:</label>
				<input type="text" class="form-control" id="ten-nganh" name="ten-nganh">
			</div>
			<hr>
			<div class="button-group text-center">
				<button type="submit" class="btn btn-success btn-add">Thêm</button>
				<button type="reset" class="btn btn-secondary btn-reset">Nhập lại</button>
			</div>
		</form>
	</div>
	<div class="wrapper-table">
		<h2>Danh sách ngành học</h2>
		<hr style="margin-bottom: 0;">
		<table class="table">
			<thead>
				<tr>
					<th>Mã ngành</th>
					<th>Tên ngành</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include_once("get-data.php");
				?>
			</tbody>
		</table>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
	<script>
		var del = document.getElementById("link-del-data");
		del.addEventListener('click', function() {
			return confirm("Bạn muốn xóa cái này?");
		});
	</script>
</body>
</html>