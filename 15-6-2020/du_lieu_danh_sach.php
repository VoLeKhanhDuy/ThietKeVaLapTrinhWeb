<?php
    //Kết nối
    include_once('ket_noi.php');
    // Viết truy vấn
    $sql = "select * from nganh";

    // Thực thi và nhận kết quả
    $rs = $conn->query($sql);

    

?>