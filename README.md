# Website Bài Tập PHP

Đây là template website bài tập PHP với giao diện Bootstrap, được thiết kế để giúp học sinh/sinh viên thực hành lập trình PHP một cách hiệu quả.

## Cấu trúc thư mục

```
WebBaiTap/
├── index.php                 # Trang chủ
├── includes/                 # Thư mục chứa các file include
│   ├── header.php           # Header (Banner)
│   ├── sidebar.php          # Menu trái
│   └── footer.php           # Footer
├── exercises/               # Thư mục chứa các bài tập
│   ├── bai1.php            # Bài 1: Hello World
│   ├── bai2.php            # Bài 2: Tính toán cơ bản
│   ├── bai3.php            # Bài 3: Vòng lặp
│   └── ...                 # Các bài tập khác
├── css/                    # Thư mục CSS
│   └── style.css           # CSS tùy chỉnh
├── js/                     # Thư mục JavaScript
│   └── script.js           # JavaScript tùy chỉnh
└── README.md               # File hướng dẫn
```

## Tính năng

- **Responsive Design**: Tương thích với mọi thiết bị
- **Bootstrap 5**: Giao diện hiện đại và đẹp mắt
- **Menu động**: Tự động highlight trang đang xem
- **Copy code**: Có thể copy code mẫu dễ dàng
- **Interactive**: Các bài tập có form tương tác
- **Syntax Highlighting**: Highlight cú pháp PHP cơ bản

## Cách sử dụng

### 1. Cài đặt
- Đảm bảo bạn đã cài đặt XAMPP/WAMP/LAMP
- Copy thư mục `WebBaiTap` vào thư mục `htdocs` (với XAMPP)
- Khởi động Apache server

### 2. Truy cập
- Mở trình duyệt và truy cập: `http://localhost/BaiTapPHP/WebBaiTap/`
- Hoặc: `http://localhost/WebBaiTap/` (tùy vào cách bạn đặt thư mục)

### 3. Thêm bài tập mới
Để thêm bài tập mới, bạn làm theo các bước sau:

1. **Tạo file bài tập mới** trong thư mục `exercises/`:
```php
<?php
$page_title = "Tiêu đề bài tập - Bài Tập PHP";
include '../includes/header.php';
?>

<div class="container-fluid mt-4">
    <div class="row">
        <?php include '../includes/sidebar.php'; ?>
        
        <div class="col-lg-9 col-md-8 main-content">
            <!-- Nội dung bài tập của bạn ở đây -->
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
```

2. **Cập nhật menu** trong file `includes/sidebar.php`:
```html
<a href="exercises/bai_moi.php" class="list-group-item list-group-item-action">
    <i class="fas fa-file-code me-2"></i>Bài mới: Tên bài tập
</a>
```

## Cấu trúc một bài tập chuẩn

Mỗi bài tập nên có các phần sau:

1. **Breadcrumb**: Điều hướng
2. **Exercise Title**: Tiêu đề bài tập
3. **Description**: Mô tả và mục tiêu
4. **Code Example**: Code mẫu với syntax highlighting
5. **Result**: Kết quả khi chạy code
6. **Interactive Demo** (tùy chọn): Form tương tác
7. **Exercise**: Bài tập thực hành
8. **Navigation**: Điều hướng tới bài trước/sau

## Classes CSS hữu ích

- `.code-block`: Khối code với background tối
- `.result-box`: Khung hiển thị kết quả
- `.description-box`: Khung mô tả bài tập
- `.exercise-title`: Tiêu đề bài tập với border
- `.main-content`: Nội dung chính

## Customization

### Thay đổi màu sắc
Sửa file `css/style.css` để thay đổi màu sắc chính:
```css
:root {
    --primary-color: #007bff;
    --success-color: #28a745;
    --warning-color: #ffc107;
    --danger-color: #dc3545;
}
```

### Thêm JavaScript
Thêm các function JavaScript vào file `js/script.js`

### Thay đổi layout
Chỉnh sửa các file trong thư mục `includes/`

## Các bài tập có sẵn

1. **Bài 1**: Hello World - Làm quen với PHP cơ bản
2. **Bài 2**: Tính toán cơ bản - Các phép toán và hàm math
3. **Bài 3**: Vòng lặp - For, While, Foreach
4. **Bài 4**: Xử lý mảng (cần tạo)
5. **Bài 5**: Functions (cần tạo)
6. **Bài 6**: OOP (cần tạo)

## Yêu cầu hệ thống

- PHP 7.4 trở lên
- Apache/Nginx web server
- Trình duyệt hỗ trợ HTML5 và CSS3

## Hỗ trợ

Nếu gặp vấn đề, hãy kiểm tra:
1. Apache server đã chạy chưa
2. Đường dẫn file có chính xác không
3. Quyền đọc/ghi file
4. Cú pháp PHP có lỗi không

## Mở rộng

Bạn có thể mở rộng website bằng cách:
- Thêm database để lưu tiến trình học tập
- Tích hợp editor code online
- Thêm hệ thống đánh giá bài tập
- Thêm forum thảo luận
- Tích hợp git để lưu trữ code

---

**Chúc bạn học tập hiệu quả với PHP!** 🚀
