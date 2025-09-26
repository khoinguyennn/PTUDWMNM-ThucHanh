<?php
$page_title = "Bài 1: Hello World - Bài Tập PHP";
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
                Bài 1: Hello World với PHP
            </h2>
            
           <!-- Exercise -->
            <div class="card shadow mb-4">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0"><i class="fas fa-pencil-alt me-2"></i>Bài tập thực hành</h5>
                </div>
                <div class="card-body">
                    <p><strong>Yêu cầu:</strong> In ra dòng chữ Hello World</p>
                </div>
            </div>
            
            <!-- Result -->
            <div class="result-box">
                <h6><i class="fas fa-play-circle me-2"></i>Kết quả khi chạy:</h6>
                <div class="bg-white p-3 border rounded">
                    <?php
                    // Thực thi code mẫu
                    echo "Hello World!";
                    ?>
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
