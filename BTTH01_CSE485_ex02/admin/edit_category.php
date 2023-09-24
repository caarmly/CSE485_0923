<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <!-- header -->
        <div class=" row shadow">
            <div class=" navbar navbar-expand-lg mt-2 mb-3 ms-2">
                <div class="navbar-nav">
                    <li class="nav-item"> 
                        <a href="../admin/index.php" class="nav-link active text-decoration-none">Administration</a>
                    </li>
                
                    <li class="nav-item">
                        <a href="../admin/index.php" class="nav-link text-decoration-none">Trang chủ</a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link text-decoration-none">Trang ngoài<img src="" alt=""></a>
                    </li>

                    <li class="nav-item">
                        <a href="../admin/category.php" class="nav-link fw-bold text-decoration-none">Thể loại<img src="" alt=""></a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link text-decoration-none">Tác giả<img src="" alt=""></a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link text-decoration-none">Bài viết<img src="" alt=""></a>
                    </li>
                </div>  
            </div>
        </div>


        <!-- body -->
        <div class="">
            <h2 class="text-center mt-5">SỬA THÔNG TIN THỂ LOẠI</h2>

            <!-- mã thể loại -->
            <div class="input-group mb-3 w-75 container">
                <span class="input-group-text" id="">Mã thể loại</span>
                <input type="text" class="form-control" placeholder="">
            </div>

            <!-- tên thể loại -->
            <div class="input-group mb-3 w-75 container">
                <span class="input-group-text" id="">Tên thể loại</span>
                <input type="text" class="form-control" placeholder="">
            </div>


            <div class=" d-md-flex justify-content-md-end" style="margin-right:200px;">
                <button class="btn btn-success" type="button">Lưu lại</button>
                <button class="btn btn-warning" type="button"><a class="text-decoration-none text-black" href="../admin/category.php">Quay lại</a> </button>
            </div>
        </div>

        <!-- footer -->
        <div class="text-center fixed-bottom">
            <hr>
            <h3 class="text-dark">TLU'S MUSIC GARDEN</h3>
        </div>
    </div>
</body>
</html>