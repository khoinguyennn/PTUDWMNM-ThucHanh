<?php 
    include("ketnoi.php");
    $ma = $_POST["txtMaMon"];
    $ten =$_POST["txtTenMon"];
    $lt =$_POST["txtTCLT"];
    $th = $_POST["txtTCTH"];
    $sql ="UPDATE monhoc SET TenMon='$ten', SoTCLT='$lt', SoTCTH='$th' WHERE MaMon='$ma'";
    $kq = mysqli_query($kn,$sql) or die("Không thể cập nhật".mysqli_error($kn));
     echo "<script>
            alert('Sửa thành công!');
            window.location.href = 'bai5.php';
            </script>";
?>