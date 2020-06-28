
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import data to database</title>
</head>
<body>
    <form method="POST" enctype= "multipart/form-data">
        <input type="file" name="file[]" multiple>
        <button type="submit" name = "btnSubmit"> Import </button>
    </form>
</body>
</html>

<?php 
	
	if(isset($_POST['btnSubmit'])){

		$countfiles = count($_FILES['file']['name']);
	 
		for($i=0;$i<$countfiles;$i++){
			$filename = $_FILES['file']['name'][$i];
            move_uploaded_file($_FILES['file']['tmp_name'][$i],'../img/products/'.$filename);
		}
		header("location:../admin.php");
	} 

