<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    
    <div class = "container_fluid">
        <!-- header -->
        <div class="row d-flex align-items-center">
            <div class="col-9 d-flex align-items-center">
                <div class="ms-3 mb-2">
                    <img style="width: 170px; height:80px; margin-left:25px;" src=" ./img/logo-music.png" alt="error">
                </div>

                <ul class="mt-2">
                    <a href="./admin/index.php" class="text-decoration-none text-dark fw-bold">TRANG CHỦ</a>  
                    <!-- fw: font-weight -->
                    <a href="login.php" class="text-decoration-none text-dark mx-3">ĐĂNG NHẬP</a>
                </ul>
            </div>
            <!-- search -->
            <div class="col-3">
                <div class="input-group mb-3 mt-2">
                    <input class="mx-1" type="text" class="form " placeholder="Nội dung cần tìm">
                    <button type="button" class="btn btn-outline-success">Tìm</button>
                </div>
            </div>
        </div>
      

        <!-- body -->
        <div>
            <div>
                <img src="./img/favourite.png" alt="" style ="height:auto; width: 100%;">
            </div>

            <h3 class="text-primary text-center mt-4">TOP BÀI HÁT YÊU THÍCH</h3>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 300px;">
                        <!-- Card là một hộp chứa linh hoạt có thể chứa nội dung đa dạng như hình ảnh, tiêu đề, văn bản, nút và các thành phần khác. -->
                            <img src="./img/tree-leave-wind.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <a class="card-title text-primary text-decoration-none" href="./detail.php">Cây,lá và gió</a>
                            </div>
                        </div> 
                    </div>

                    <div class="col">
                        <div class="card" style="width: 300px;">
                            <img src="./img/lovely-life.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <a class="card-title text-primary text-decoration-none" href="./detail.php">Cuộc sống mến thương</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 300px;">
                            <img src="./img/mother.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <a class="card-title text-primary text-decoration-none" href="./detail.php">Lòng mẹ</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 300px;">
                            <img src="./img/phoi-pha.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <a class="card-title text-primary text-decoration-none" href="./detail.php">Phôi pha</a>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="container text-center mt-4">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 300px;">
                            <img src="./img/love.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a class="card-title text-primary text-decoration-none" href="./detail.php">Nơi tình yêu bắt đầu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- footer -->
        <hr>
        <div class="text-center">
            <h3 class="text-dark">TLU'S MUSIC GARDEN</h3>
        </div>

    </div>
</body>
</html>