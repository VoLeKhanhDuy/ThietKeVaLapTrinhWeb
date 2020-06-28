<?php
    require ('connect/db_connect.php');
    require ('PHPExcel.php');

    if(isset($_POST['btnSubmit'])){
        $file = $_FILES['file']['tmp_name'];
        
        $objReader = PHPExcel_IOFactory::createReaderForFile($file);
        $objReader->setLoadSheetsOnly('Sheet1');

        $objExcel = $objReader->load($file);
        $sheetData = $objExcel->getActiveSheet()->toArray('null', true, true, true);
        $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
      
        for($row = 2; $row <= $highestRow; $row++) {
            $MaSP = $sheetData[$row]['A'];
            $MaLSP = $sheetData[$row]['B'];
            $TenSP  = $sheetData[$row]['C'];
            $DonGia = $sheetData[$row]['D'];
            $SoLuong = $sheetData[$row]['E'];
            $HinhAnh = $sheetData[$row]['F'];
            $MaKM = $sheetData[$row]['G'];
            $ManHinh = $sheetData[$row]['H'];
            $HDH = $sheetData[$row]['I'];
            $CamSau = $sheetData[$row]['J'];
            $CamTruoc = $sheetData[$row]['K'];
            $CPU = $sheetData[$row]['L'];
            $Ram = $sheetData[$row]['M'];
            $Rom = $sheetData[$row]['N'];
            $SDCard = $sheetData[$row]['O'];
            $Pin = $sheetData[$row]['P'];
            $SoSao = $sheetData[$row]['Q'];
            $SoDanhGia = $sheetData[$row]['R'];
            $TrangThai = $sheetData[$row]['S'];
            
            $sql = "INSERT INTO sanpham(MaSP, MaLSP, TenSP, DonGia, SoLuong, HinhAnh, MaKM, ManHinh, HDH, 
            CamSau, CamTruoc, CPU, Ram, Rom, SDCard, Pin, SoSao, SoDanhGia, TrangThai) 
            VALUES ('$MaSP',' $MaLSP', '$TenSP', '$DonGia', '$SoLuong',' $HinhAnh', '$MaKM', '$ManHinh', 
            '$HDH', '$CamSau', '$CamTruoc', '$CPU', '$Ram', '$Rom', '$SDCard', '$Pin', '$SoSao', 
            '$SoDanhGia', '$TrangThai')";
            
            $conn->query($sql);
        }
        header("location:../admin.php");
    }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import data to database</title>
</head>
<body>
    <form method="POST" enctype= "multipart/form-data">
        <input type="file" name= "file">
        <button type="submit" name = "btnSubmit"> Import </button>
    </form>
</body>
</html>