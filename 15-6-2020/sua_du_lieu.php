<?php
    include_once('ket_noi.php');

    if(isset($_GET["ma"]))
    {
        $maNganh = $_GET["ma"];
    }
    $tenNganh = $_POST['txtTenNganh'];
    
    $sql = "UPDATE nganh SET TenNG='$tenNganh' WHERE MaNG ='$maNganh'" ;
    if($conn->query($sql) == true)
        header("Location: http://localhost/18-5-2020/form.php");
        else "Loi" . $conn->error;
    $conn->close();
