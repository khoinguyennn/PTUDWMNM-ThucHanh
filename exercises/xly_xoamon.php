<?php 

 include('ketnoi.php'); 
 $ma=$_REQUEST["mm"];
 $sql="DELETE FROM monhoc WHERE MaMon='$ma'";
 $kq = mysqli_query($kn,$sql) or die ("Không thể xóa môn học".mysqli_error($kn));
 echo "<script>
    alert('Xóa thành công!');
    window.location.href = 'bai5.php';
 </script>";

?>