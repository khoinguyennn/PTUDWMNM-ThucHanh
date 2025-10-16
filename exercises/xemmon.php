<?php
    include('ketnoi.php');
    $sql = "SELECT * FROM monhoc";
    $result = mysqli_query($kn, $sql) or die ("Không thể truy vấn CSDL".mysqli_error($kn));
    while($row = mysqli_fetch_array($result)){
        echo ("<>");$mamon=$row['MaMon'];
        echo ("<td>".$row['MaMon']."</td>");
        echo ("<td>".$row['TenMon']."</td>");
        echo ("<td>".$row['SoTCLT']."</td>");
        echo ("<td>".$row['SoTCTH']."</td>");
        echo ("<td><a href='suamon.php?mm=$mamon'>Sửa</a></td>");
        echo ("<td><a href='xoamon.php?mm=$mamon'>Xóa</a></td>");
        echo ("</tr>");
    }

?>