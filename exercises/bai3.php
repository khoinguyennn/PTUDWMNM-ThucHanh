<?php
$page_title = "Bài 3: Ghi thông tin vào file - Bài Tập PHP";
include '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container-fluid mt-4">
    <div class="row">
        <?php include '../includes/sidebar.php'; ?>
        
        <!-- Main Content Area -->
        <div class="col-lg-9 col-md-8 main-content">

            
            <!-- Exercise Title -->
            <h2 class="exercise-title">
                <i class="fas fa-file-code me-2"></i>
                Bài 3: Ghi thông tin vào file
            </h2>
            
           <!-- Exercise -->
            <div class="card shadow mb-4">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0"><i class="fas fa-pencil-alt me-2"></i>Bài tập thực hành</h5>
                </div>
                <div class="card-body">
                    <p><strong>Yêu cầu:</strong> ...
                       
                    </p>
                </div>
            </div>
            
            <!-- Result -->
            <div class="result-box">
                <h6><i class="fas fa-play-circle me-2"></i>Kết quả khi chạy:</h6>
                <div class="bg-white p-3 border rounded">
                  <form name="frmGhi" action="" method="post">
                    Nhập chuỗi cần ghi vào file: <input type="text" name="sbmWord">
                    <button>Xong</button>
                    <input type="submit" name="sbmGhi" value="Ghi vào nội dung">
                    <?php
                    if(isset($_POST["sbmGhi"])){
                      $nd = $_POST["sbmWord"];
                      $f = fopen("thunghiem.txt","a+") or die("Không thể mở file");
                      fwrite($f, $nd. "&nbsp;") or die("Không thể ghi file");
                    //   fwrite($f, "<br>") or die("Không ghi được bằng phím Enter");
                      echo( "<br>Đã ghi thành công");
                      echo ("<br><input type='submit' name='sbmXemNDung' value='Xem nội dung đã ghi'>");
                      fclose($f);
                    }

                    if(isset($_POST["sbmXemNDung"])){
                        $file=fopen("thunghiem.txt","a+") or die("Không thể mở file");
                        while(!feof($file)){
                            $ndung=fgets($file);
                            echo "<br>".$ndung;
                        }
                    }
                    ?>
                  </form>
                </div>
            </div>
            
            
            <!-- Navigation -->
            <div class="d-flex justify-content-between mt-4">
                <a href="../index.php" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Quay lại trang chủ
                </a>
                <a href="bai2.php" class="btn btn-primary">
                    Bài tiếp theo <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>