<?php 
    session_start();
    ob_start();
    include_once "_connect.php";
        if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $sql = "delete from sanpham where MaSP = '$id'";
        if($conn->query($sql) === TRUE){
            $_SESSION['thongBao'] = 1;
           
            header("location:../admin.php");
        } else {
            echo $conn->error;
        }
        
    }