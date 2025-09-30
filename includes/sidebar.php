<!-- Sidebar Menu -->
<div class="col-lg-3 col-md-4">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            <h5 class="card-title mb-0">
                <i class="fas fa-list me-2"></i>
                Menu bài tập
            </h5>
            <small class="text-light">Các đường dẫn đến các bài tập</small>
        </div>
        <div class="card-body p-0">
            <?php
            // Xác định đường dẫn tùy theo vị trí hiện tại
            $is_in_exercises = (strpos($_SERVER['REQUEST_URI'], '/exercises/') !== false);
            $home_path = $is_in_exercises ? '../index.php' : 'index.php';
            $exercise_prefix = $is_in_exercises ? '' : 'exercises/';
            ?>
            <div class="list-group list-group-flush">
                <a href="<?php echo $home_path; ?>" class="list-group-item list-group-item-action <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                    <i class="fas fa-home me-2"></i>Trang chủ
                </a>
                
                <!-- Bài tập cơ bản -->
                <a href="<?php echo $exercise_prefix; ?>bai0.php" class="list-group-item list-group-item-action <?php echo basename($_SERVER['PHP_SELF']) == 'bai0.php' ? 'active' : ''; ?>">
                    <i class="fas fa-file-code me-2"></i>Template mẫu cho các bài tập
                </a>
                <a href="<?php echo $exercise_prefix; ?>bai1.php" class="list-group-item list-group-item-action <?php echo basename($_SERVER['PHP_SELF']) == 'bai1.php' ? 'active' : ''; ?>">
                    <i class="fas fa-file-code me-2"></i>Bài 1: Hello World
                </a>
                <a href="<?php echo $exercise_prefix; ?>bai2.php" class="list-group-item list-group-item-action <?php echo basename($_SERVER['PHP_SELF']) == 'bai2.php' ? 'active' : ''; ?>">
                    <i class="fas fa-file-code me-2"></i>Bài 2: Chương trình máy tính
                </a>
                <a href="<?php echo $exercise_prefix; ?>bai3.php" class="list-group-item list-group-item-action <?php echo basename($_SERVER['PHP_SELF']) == 'bai3.php' ? 'active' : ''; ?>">
                    <i class="fas fa-file-code me-2"></i>Bài 3: Ghi thông tin vào file
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
