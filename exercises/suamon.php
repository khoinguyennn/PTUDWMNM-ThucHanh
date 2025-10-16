<?php 
include('ketnoi.php');
$ma=$_REQUEST['mm'];
$lenh="SELECT * FROM monhoc WHERE MaMon='$ma'";
$kq=mysqli_query($kn,$lenh);
echo("<form name='frmSuaMon' action='xly_suamon.php' method='post'>");
while($row = mysqli_fetch_array($kq)){
    echo("Mã môn: <input type='text' name='txtMaMon' value='".$row['MaMon']."' readonly><br>");
    echo("Tên môn: <input type='text' name='txtTenMon' value='".$row['TenMon']."'><br>");
    echo("Số TC LT: <input type='text' name='txtTCLT' value='".$row['SoTCLT']."'><br>");
    echo("Số TC TH: <input type='text' name='txtTCTH' value='".$row['SoTCTH']."'><br>");
    echo("<input type='submit' name='sbmSua' value='Sửa môn học'>");
}echo("</form>");

?>