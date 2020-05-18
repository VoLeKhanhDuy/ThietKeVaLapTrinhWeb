<?php
  include_once("connect.php");

  $sql = "SELECT * FROM tbl_nganh";

  $result = $conn->query($sql);

  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>" . $row["ma_nganh"] . "</td>" . 
        "<td>" . $row["ten_nganh"] . "</td>
        <td>
          <a href='del_data.php?ma=<?php echo $row['maNganh']; ?>' id='link-del-data' class='btn btn-sm btn-outline-danger'>
            <i class='fas fa-trash-alt'></i>
          </a>
        </td>
        </tr>";
    }
  } else {
    echo "<div class='alert alert-warning'>Không có dữ liệu</div>";
  }

  $conn->close()
?>