<?php
$page_title = "Trang chủ - Bài Tập PHP";
include 'includes/header.php';
?>

<div class="container-fluid mt-4">
    <div class="row">
        <?php include 'includes/sidebar.php'; ?>
        
        <!-- Main Content Area -->
        <div class="col-lg-9 col-md-8 main-content">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fas fa-home me-1"></i>Trang chủ
                    </li>
                </ol>
            </nav>
            
            <!-- Welcome Card -->
            <div class="card shadow-lg mb-4">
                <div class="card-header bg-gradient bg-primary text-white">
                    <h4 class="card-title mb-0">
                        <i class="fas fa-rocket me-2"></i>
                        Chào mừng đến với Bài Tập PHP
                    </h4>
                </div>
                <div class="card-body">
                    <p class="lead">
                        Bài tập sau khi được click từ menu trái sẽ hiển thị ở đây
                    </p>
                    <p class="text-muted">
                        Đây là nội dung mặc định khi chưa chọn bài tập nào. Vui lòng chọn một bài tập từ menu bên trái để bắt đầu học tập.
                    </p>
                    
                    <!-- Quick Stats
                    <div class="row mt-4">
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card bg-info text-white">
                                <div class="card-body text-center">
                                    <i class="fas fa-file-code fa-2x mb-2"></i>
                                    <h5>...</h5>
                                    <small>Bài tập có sẵn</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card bg-success text-white">
                                <div class="card-body text-center">
                                    <i class="fas fa-layer-group fa-2x mb-2"></i>
                                    <h5>...</h5>
                                    <small>Cấp độ khác nhau</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card bg-warning text-white">
                                <div class="card-body text-center">
                                    <i class="fas fa-clock fa-2x mb-2"></i>
                                    <h5>24/7</h5>
                                    <small>Có thể học mọi lúc</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card bg-danger text-white">
                                <div class="card-body text-center">
                                    <i class="fas fa-heart fa-2x mb-2"></i>
                                    <h5>100%</h5>
                                    <small>Miễn phí</small>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            
            <!-- Instructions Card -->
            <div class="card shadow mb-4">
                <div class="card-header bg-light">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-info-circle me-2 text-info"></i>
                        Hướng dẫn sử dụng
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6><i class="fas fa-mouse-pointer me-2 text-primary"></i>Cách sử dụng:</h6>
                            <ol class="list-unstyled ms-3">
                                <li><i class="fas fa-check text-success me-2"></i>Chọn bài tập từ menu bên trái</li>
                                <li><i class="fas fa-check text-success me-2"></i>Đọc mô tả và yêu cầu</li>
                                <li><i class="fas fa-check text-success me-2"></i>Xem code mẫu và kết quả</li>
                                <li><i class="fas fa-check text-success me-2"></i>Thực hành và chỉnh sửa</li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <h6><i class="fas fa-lightbulb me-2 text-warning"></i>Lưu ý:</h6>
                            <ul class="list-unstyled ms-3">
                                <li><i class="fas fa-arrow-right text-info me-2"></i>Có thể copy code để thử nghiệm</li>
                                <li><i class="fas fa-arrow-right text-info me-2"></i>Mỗi bài có mức độ khó khác nhau</li>
                                <li><i class="fas fa-arrow-right text-info me-2"></i>Nên làm theo thứ tự từ dễ đến khó</li>
                                <li><i class="fas fa-arrow-right text-info me-2"></i>Có thể quay lại bài cũ bất cứ lúc nào</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recent Updates -->
            <div class="card shadow">
                <div class="card-header bg-gradient bg-secondary text-white">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-bell me-2"></i>
                        Cập nhật gần đây
                    </h5>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <span class="badge bg-primary rounded-pill">Đang cập nhật</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
