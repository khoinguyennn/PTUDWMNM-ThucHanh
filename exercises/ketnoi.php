<?php
 $kn = mysqli_connect("localhost:3307","root","") or die("Không thể kết nối đến CSDL");
 $csdl = mysqli_select_db($kn,"quanly_diem") or die("Không thể chọn CSDL");
 mysqli_query($kn,"SET NAMES 'utf8'") or die("Không thể mã hóa");
?>