    <!-- Footer Section -->
    <footer class="bg-dark text-white mt-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h6><i class="fas fa-graduation-cap me-2"></i>Bài Tập PHP</h6>
                    <p class="mb-0 small">
                        Website học tập và thực hành lập trình PHP với các bài tập từ cơ bản đến nâng cao.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-1 small">
                        <i class="fas fa-calendar-alt me-2"></i>
                        Cập nhật: <?php echo date('d/m/Y H:i'); ?>
                    </p>
                    <p class="mb-0 small">
                        <i class="fas fa-code me-2"></i>
                        Được phát triển bởi Trầm Khôi Nguyên
                    </p>
                </div>
            </div>
            <hr class="my-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0 small">
                        &copy; <?php echo date('Y'); ?> Bài Tập PHP. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="btn-group" role="group">
                        <a href="#" class="btn btn-outline-light btn-sm">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-question-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <?php
    // Xác định đường dẫn JS tùy theo vị trí file
    $js_path = (strpos($_SERVER['REQUEST_URI'], '/exercises/') !== false) ? '../js/script.js' : 'js/script.js';
    ?>
    <script src="<?php echo $js_path; ?>"></script>
</body>
</html>
