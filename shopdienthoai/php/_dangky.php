<?php
  include "_connect.php";

  if(isset($_POST["ho"]) && isset($_POST["ten"]) && isset($_POST["sdt"]) && isset($_POST["diachi"]) && isset($_POST["newUser"]) && isset($_POST["newPass"])) {
    $ho = $_POST["ho"];
    $ten = $_POST["ten"];
    $sdt = $_POST["sdt"];
    $email = $_POST["email"];
    $diachi = $_POST["diachi"];
    $username = $_POST["newUser"];
    $password = md5($_POST["newPass"]);

    $sql = "INSERT INTO nguoidung(MaND, Ho, Ten, GioiTinh, SDT, Email, TaiKhoan, DiaChi, MatKhau, MaQuyen, TrangThai) VALUES ('','$ho', '$ten', '', '$sdt', '$email', '$username', '$diachi', '$password', 1, 1)";

    if($conn->query($sql) === true)
      header("Location: ../index.php");
  }
?>