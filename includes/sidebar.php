<!-- Sidebar Menu -->
<div class="col-lg-3 col-md-4">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            <h5 class="card-title mb-0">
                <i class="fas fa-list me-2"></i>
                Menu bài tập
            </h5>
            <small class="text-light">Các đường dẫn tương đối đến các bài tập</small>
        </div>
        <div class="card-body p-0">
            <div class="list-group list-group-flush">
                <a href="../index.php" class="list-group-item list-group-item-action <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                    <i class="fas fa-home me-2"></i>Trang chủ
                </a>
                
                <!-- Các bài tập -->
                <a href="exercises/bai1.php" class="list-group-item list-group-item-action <?php echo basename($_SERVER['PHP_SELF']) == 'bai1.php' ? 'active' : ''; ?>">
                    <i class="fas fa-file-code me-2"></i>Bài 1: Hello World
                </a>
                
            </div>
        </div>
    </div>
    
    <!-- Thông tin thêm -->
    <div class="card shadow-sm mt-3">
        <div class="card-header bg-info text-white">
            <h6 class="card-title mb-0">
                <i class="fas fa-info-circle me-2"></i>Thông tin
            </h6>
        </div>
        <div class="card-body">
            <p class="card-text small">
                <i class="fas fa-lightbulb text-warning me-2"></i>
                Mỗi bài tập được thiết kế để học từng chủ đề cụ thể trong PHP.
            </p>
            <p class="card-text small mb-0">
                <i class="fas fa-code text-primary me-2"></i>
                Code có thể được chỉnh sửa và thử nghiệm trực tiếp.
            </p>
        </div>
    </div>
</div>
