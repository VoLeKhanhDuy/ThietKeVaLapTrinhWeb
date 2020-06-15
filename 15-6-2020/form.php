<?php 
    include_once('du_lieu_danh_sach.php');
    
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="xu_ly.php">
    <link rel="stylesheet" href="ket_noi.php">
    <style> 
        .active_icon {
            margin-right: 5px;
        }

        .btn-menu {
            margin-left: 200px;
            margin-top: 20px;
        }

        .btn_nganh {
            text-decoration: none;
            color: white;
        }

        .btn-lop {
            text-decoration: none;
            color: white;
        }
    </style>
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
    <div class="btn-menu">
        <button type="button" class="btn btn-primary">
            <a href="form.php" class="btn_nganh">Ngành</a>
        </button>
        <button type="button" class="btn btn-primary">
            <a href="frm_lop_them_xoa_sua.php" class="btn_lop">Lớp</a>
        </button>
    </div>

    <form action="xu_ly.php" method="POST" style="border: 1px solid black; width: 900px; height: 600px; margin-left: 200px; margin-top:10px;">
    
        
        <fieldset style="margin: 10px 10px 15px 15px">
            <legend>FORM NGÀNH HỌC</legend>
            <label for="fname">Mã nghành:</label>
            <input type="text" id="fname" name="txtMaNganh" >
            <label for="lname">Tên nghành:</label>
            <input type="text" id="lname" name="txtTenNganh" ><br>
            <button type="submit" class="btn btn-success" name="submit">Thêm</button>
            <button type="reset" class="btn btn-secondary" name="reset">Nhập lại</button>
            <br><br><br>
    </form> 
            <legend>Danh sách nghành học</legend>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Mã ngành</th>
                        <th>Tên ngành</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($rs->num_rows > 0)
                        {
                            while ($row = $rs->fetch_assoc())
                            {
                                ?>
                                    <tr>
                                        <td><?php echo $row["MaNG"]?></td>
                                        <td><?php echo $row["TenNG"]?></td>
                                        <td>
                                            <a>
                                                <div class="btn btn-success" data-toggle="modal" data-target="#myModal">
                                                <i class="fas fa-edit active_icon"></i>Sửa
                                                </div>
                                            </a>

                                            <a href="xoa_du_lieu.php?ma=<?php echo $row["MaNG"]?>" onclick="return confirm('Bạn có muốn xóa?')">
                                                <div class="btn btn-danger">
                                                    <i class="fas fa-trash-alt active_icon"></i>Xóa
                                                </div>
                                            </a>

                                            <!-- Modal -->
                                                
                                            <div class="modal fade" id="myModal">
                            
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Sửa ngành học</h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                <form action="sua_du_lieu.php?ma=<?php echo $row["MaNG"]?>" method="post">
                                                                        <label for="fname">Mã nghành:</label>
                                                                        <input type="text" id="fname" name="txtMaNganh" value="<?php echo $row["MaNG"]?>" disabled> <br>
                                                                        <label for="lname">Tên nghành:</label>
                                                                        <input type="text" id="lname" name="txtTenNganh" value="<?php echo $row["TenNG"]?>"> <br>
                                                            </div>         
                                                                    <!-- Modal footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-info" >Sửa</button>
                                                                    </div>
                                                                </form> 
                                                            </div>
                                                    </div>
                                                </div>
                                        </td>
                                    </tr>
                                <?php           
                            }
                        }
                        $conn->close();
                    ?>
                    </tbody>
                </table>
        </fieldset>
       
        
       
     

     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>