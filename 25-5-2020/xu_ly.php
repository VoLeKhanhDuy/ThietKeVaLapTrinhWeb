<?php
    include_once('ket_noi.php');
    //echo "Mã: " . $_POST["txtMaNganh"]."<br/>";
    
   // echo "Tên: " . $_POST["txtTenNganh"];

    if(isset($_POST["submit"]) && !empty($_POST["txtTenNganh"]))
    {
        $ma = $_POST["txtMaNganh"];
        $ten = $_POST["txtTenNganh"];
    }

    if(isset($_POST["submit"]))
    {
        $sql = "INSERT INTO nganh value('$ma', N'$ten')";
        if($conn->query($sql) == true)
            header("Location: http://localhost/18-5-2020/form.php");
            else "Loi" . $conn->error;
        $conn->close();
    }
?>