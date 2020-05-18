<?php
  echo "Mã ngành: " . $_POST["ma-nganh"] . "<br>";
  echo "Tên ngành: " . $_POST["ten-nganh"];
  include_once ("./connect.php");
  
  $maNganh = "";
  $tenNganh = "";
  
  if(empty($maNganh) && empty($tenNganh)) {
    $maNganh = $_POST["ma-nganh"];
    $tenNganh = $_POST["ten-nganh"];
  }

  $sql = "INSERT INTO tbl_nganh(ma_nganh, ten_nganh) VALUES(N'$maNganh', N'$tenNganh')";

  if($conn->query($sql) == true) {
    header("Location: frm_them-nganh-hoc.php");
  } else {
    echo "<h4>Lỗi thêm dữ liệu:</h4> " .$conn->error;
  }

?>