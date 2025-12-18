<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .product-card {
            transition: transform 0.2s, box-shadow 0.2s;
            height: 100%;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .price {
            font-size: 1.4rem;
            color: #0d6efd;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-primary">Bài tập cuối kỳ</h1>
            <p class="lead text-muted">Danh sách sản phẩm</p>
            <hr class="w-25 mx-auto border-primary border-3 opacity-75">
        </div>

        @if(count($danhSachSanpham) > 0)
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($danhSachSanpham as $sp)
                    <div class="col">
                        <div class="card product-card border-0 shadow-sm rounded-4">
                            <div class="card-body text-center py-5">
                                <!-- Nếu sau này có ảnh sản phẩm, có thể thêm ở đây -->
                                <div class="placeholder bg-light rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;"></div>
                                
                                <h5 class="card-title fw-semibold">{{ $sp['name'] }}</h5>
                                <p class="price fw-bold mb-0">{{ number_format($sp['price']) }} VNĐ</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-5">
                <p class="text-muted">Chưa có sản phẩm nào.</p>
            </div>
        @endif
    </div>
</body>
</html>