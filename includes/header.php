<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Bài Tập PHP'; ?></title>
    <!-- Google Fonts - Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <?php
    // Xác định đường dẫn CSS tùy theo vị trí file
    $css_path = (strpos($_SERVER['REQUEST_URI'], '/exercises/') !== false) ? '../css/style.css' : 'css/style.css';
    ?>
    <link rel="stylesheet" href="<?php echo $css_path; ?>">
</head>
<body>
    <!-- Banner Section -->
    <header class="bg-primary text-white py-4 shadow">
        <!-- Floating Code Symbols -->
        <div class="code-symbol">&lt;?php</div>
        <div class="code-symbol">{ }</div>
        <div class="code-symbol">( )</div>
        <div class="code-symbol">[ ]</div>
        <div class="code-symbol">$</div>
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3 mb-0 d-flex align-items-center">
                        <?php
                        // Xác định đường dẫn logo tùy theo vị trí file
                        $logo_path = (strpos($_SERVER['REQUEST_URI'], '/exercises/') !== false) ? '../img/logo-xmas.png' : 'img/logo-xmas.png';
                        ?>
                        <img src="<?php echo $logo_path; ?>" alt="Logo" class="logo-header me-2">
                        PHP
                    </h1>
                </div>
                <div class="col-md-6 text-md-end">
                    <span class="badge bg-light text-primary">
                        <i class="fas fa-calendar-alt me-1"></i>
                        <?php echo date('d/m/Y'); ?>
                    </span>
                </div>
            </div>
        </div>
    </header>
