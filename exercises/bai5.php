<?php
$page_title = "Bài 0: Template mẫu cho các bài tập";
include '../includes/header.php';
?>

<div class="container-fluid mt-4">
    <div class="row">
        <?php include '../includes/sidebar.php'; ?>
        
        <!-- Main Content Area -->
        <div class="col-lg-9 col-md-8 main-content">

            
            <!-- Exercise Title -->
            <h2 class="exercise-title">
                <i class="fas fa-file-code me-2"></i>
                Bài thứ 5: Xem các môn trong database quanly_diem
            </h2>
            
           <!-- Exercise -->
            <div class="card shadow mb-4">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0"><i class="fas fa-pencil-alt me-2"></i>Bài tập thực hành</h5>
                </div>
                <div class="card-body">
                    <p><strong>Yêu cầu:</strong> 
                    Xem các môn trong database quanly_diem
                    </p>
                </div>
            </div>
            
            <!-- Result -->
            <div class="result-box">
                <h6><i class="fas fa-play-circle me-2"></i>Kết quả khi chạy:</h6>
                <div class="bg-white p-3 border rounded">
                    <style>
                        /* CSS cho bảng trong result-box */
                        .result-box table {
                            width: 100%;
                            border-collapse: collapse;
                            margin: 0 auto;
                            background-color: #fff;
                            border-radius: 8px;
                            overflow: hidden;
                            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                            border: none !important;
                        }

                        .result-box table th {
                            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
                            color: white;
                            padding: 12px 15px;
                            text-align: center;
                            font-weight: 600;
                            font-size: 14px;
                            border: none;
                            text-transform: uppercase;
                            letter-spacing: 0.5px;
                        }

                        .result-box table td {
                            padding: 10px 15px;
                            text-align: center;
                            border: none;
                            border-bottom: 1px solid #e9ecef;
                            vertical-align: middle;
                            font-size: 14px;
                        }

                        /* Giảm padding cho cột xử lý */
                        .result-box table td:nth-last-child(-n+2) {
                            padding: 10px 5px;
                        }

                        .result-box table tr:nth-child(even) {
                            background-color: #f8f9fa;
                        }

                        .result-box table tr:nth-child(odd) {
                            background-color: #ffffff;
                        }

                        .result-box table tr:hover {
                            background-color: #e3f2fd !important;
                            transform: translateY(-1px);
                            transition: all 0.3s ease;
                        }

                        .result-box table tr:last-child td {
                            border-bottom: none;
                        }

                        /* CSS cho các nút Sửa/Xóa */
                        .result-box table a {
                            display: inline-block;
                            padding: 6px 12px;
                            margin: 0;
                            text-decoration: none;
                            border-radius: 4px;
                            font-size: 12px;
                            font-weight: 500;
                            transition: all 0.3s ease;
                            text-transform: uppercase;
                            letter-spacing: 0.5px;
                        }

                        /* Khoảng cách giữa các nút */
                        .result-box table a + a {
                            margin-left: 3px;
                        }

                        .result-box table a[href*="sua"] {
                            background-color: #28a745;
                            color: white;
                            border: 1px solid #28a745;
                        }

                        .result-box table a[href*="sua"]:hover {
                            background-color: #218838;
                            border-color: #1e7e34;
                            transform: translateY(-1px);
                            box-shadow: 0 2px 4px rgba(40, 167, 69, 0.3);
                        }

                        .result-box table a[href*="xoa"] {
                            background-color: #dc3545;
                            color: white;
                            border: 1px solid #dc3545;
                        }

                        .result-box table a[href*="xoa"]:hover {
                            background-color: #c82333;
                            border-color: #bd2130;
                            transform: translateY(-1px);
                            box-shadow: 0 2px 4px rgba(220, 53, 69, 0.3);
                        }

                        /* Container của bảng */
                        .result-box .bg-white {
                            padding: 20px !important;
                            border-radius: 12px !important;
                            box-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
                            border: 1px solid #e9ecef !important;
                        }
                    </style>
                    
                    <table border="1" align="center">
                        <tr>
                            <th>Mã môn</th>
                            <th>Tên môn</th>
                            <th>LT</th>
                            <th>TH</th>
                            <th colspan="2">Xử lý</th>
                        </tr>
                        <?php
                            include('ketnoi.php');
                            $sql = "SELECT * FROM monhoc";
                            $result = mysqli_query($kn, $sql) or die ("Không thể truy vấn CSDL".mysqli_error($kn));
                            while($row = mysqli_fetch_array($result)){
                                echo ("<tr>");$mamon=$row['MaMon'];
                                echo ("<td>".$row['MaMon']."</td>");
                                echo ("<td>".$row['TenMon']."</td>");
                                echo ("<td>".$row['SoTCLT']."</td>");
                                echo ("<td>".$row['SoTCTH']."</td>");
                                echo ("<td><a href='suamon.php?mm=$mamon'>Sửa</a></td>");
                                echo ("<td><a href='xly_xoamon.php?mm=$mamon'>Xóa</a></td>");
                                echo ("</tr>");
                            }

                        ?>
                    </table>
                </div>
            </div>
            
            
            <!-- Navigation -->
            <div class="d-flex justify-content-between mt-4">
                <a href="../index.php" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Quay lại trang chủ
                </a>
                <a href="bai1.php" class="btn btn-primary">
                    Bài tiếp theo <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
