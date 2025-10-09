<?php
    include('ketnoi.php');
    $ma=$_POST["txtMMon"];
    $ten=$_POST["txtTMon"];
    $lt=$_POST["txtLThuyet"];
    $th=$_POST["txtTHanh"];

    $chuoi = "insert into monhoc values ('".$ma."','".$ten."',".$lt.",".$th.")";
    $kq = mysqli_query($kn, $chuoi) or die ("Không thể thêm môn học mới".mysqli_error($kn));
    echo("Thêm thành công");
    mysqli_close($kn);

?>