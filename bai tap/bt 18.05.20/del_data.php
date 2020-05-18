<?php
  include_once("connect.php");

  $maNganh = $row["ma-nganh"];
  $sql = "DELETE FROM tbl_nganh WHERE ma_nganh='$maNganh'";
  if($conn->query($sql) === true) {
    header("Location: frm_them-nganh-hoc.php");
  } else {
    echo "Xóa thất bại: " . $conn->error;
  }

  $conn->close()
?>