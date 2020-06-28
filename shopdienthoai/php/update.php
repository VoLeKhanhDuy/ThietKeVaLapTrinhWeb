<?php
    
    include_once "_connect.php";
   
        if(isset($_POST['submit'])){
           
            $id = $_POST['maspSua1'];
            $tenSP = $_POST['tenSP'];
            $chonCompany = $_POST['chonCompany'];
            $giaTien = $_POST['giaTien'];
        
            $soSao = $_POST['soSao'];
            $danhGia = $_POST['danhGia'];
            $chonKhuyenMai = $_POST['chonKhuyenMai'];
            $giatrikm = $_POST['giatrikm'];
            $manHinh = $_POST['manHinh'];
            $hdh = $_POST['hdh'];
            $camSau = $_POST['camSau'];
            $camTruoc = $_POST['camTruoc'];
            $ram = $_POST['ram'];
            $rom = $_POST['rom'];
            $sdCard = $_POST['sdCard'];
            $pin = $_POST['pin'];
            
            $sql = "update sanpham set tenSP = '$tenSP', DonGia ='$giaTien', SoSao = '$soSao', 
            SoDanhGia = '$danhGia', MaKM = '$chonKhuyenMai', ManHinh = '$manHinh', HDH = '$hdh', CamSau = '$camSau', CamTruoc = '$camTruoc', RAM = '$ram', ROM = '$rom', SDCard = '$sdCard', Pin = '$pin' where MaSP = '$id'";
            if($conn->query($sql) === TRUE){
                header("location:../admin.php");exit();
            } else {
                echo $conn->error;
            }
        }
   