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
        <div class="row mt-5 text-center ">
            <div>
                <div class="col-3 ">
                    <button type="submit" class="btn btn-success" style="margin-left:50px">Thêm mới</button>
                </div>
            </div>


            <div class="">
                <div class="row fw-bold w-75" style="margin-left:150px">
                    <label for="" class="col-2">#</label>
                    <label for="" class="col-6">Tên thể loại</label>
                    <label for="" class="col-2">Sửa</label>
                    <label for="" class="col-2">Xóa</label>
                    <hr>
                </div>
            </div>

            <div class="">
                <div class="row w-75" style="margin-left:150px">
                    <label for="" class="col-2 fw-bold">1</label>
                    <label for="" class="col-6">Nhạc trữ tình</label>
                    <a href="#" class="col-2"><i class="bi bi-pencil-square"></i></a>
                    <a href="#" class="col-2"><i class="bi bi-trash-fill"></i></a>
 
                    <hr>
                </div>
            </div>

            
            <div class="">
                <div class="row w-75" style="margin-left:150px">
                    <label for="" class="col-2 fw-bold">2</label>
                    <label for="" class="col-6">Nhạc cách mạng</label>
                    <a href="#" class="col-2"><i class="bi bi-pencil-square"></i></a>
                    <a href="#" class="col-2" ><i class="bi bi-trash-fill col-2"></i></a>
                 
                <hr>
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