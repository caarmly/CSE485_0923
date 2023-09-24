<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    
    <div class = "container_fluid">
        <!-- header -->
        <div class="row d-flex align-items-center shadow">
            <div class="col-9 d-flex align-items-center">
                <div class="ms-3 mb-2">
                    <img style="width: 170px; height:80px; margin-left:25px;" src=" ./img/logo-music.png" alt="error">
                </div>

                <ul class="mt-2">
                    <a href="index.php" class="text-decoration-none text-dark">TRANG CHỦ</a>  
                    <!-- fw: font-weight -->
                    <a href="login.php" class="text-decoration-none text-dark mx-3 fw-bold">ĐĂNG NHẬP</a>
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
        <div class="container-fluid">
            <div class="login w-25 h-25 bg-secondary container mt-5 mb-5 rounded">
                <div class="row d-flex ">
                    <h5 class="text-white col-8 mt-3">Sign In</h5>
                    <div class="icon col-4 mt-3">
                        <i class="bi bi-facebook text-warning fs-3" href=""></i>
                        <i class="bi bi-google text-warning fs-3" href=""></i>
                        <i class="bi bi-twitter text-warning  fs-3" herf=""></i>
                    </div>
                </div>

                <hr>
                <form class="row align-items-center ">

                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <input type="text" class="form-control" id="" placeholder="Username">
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="bi bi-key-fill"></i>
                            </div>
                            <input type="text" class="form-control" id="" placeholder="Password">
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="">
                            <label class="form-check-label text-white" for="">Remember me</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-9"> </div>

                        <div class ="col-3">
                            <button type="submit" class="btn btn-warning mt-2 ms-1 mb-5">
                                <a class="text-dark text-decoration-none w-100" href="">Login</a>
                            </button>
                        </div>
                    </div>
                    <hr>
                    <div class="a">
                        <p class="text-center mb-1">Don't have account? <a class="text-warning text-decoration-none" href="">Sign Up</a>
                        </p>

                        <p class="text-center mb-3 "><a class="text-warning text-decoration-none" href="">Forgot you password?</a>
                        </p>
                    </div>
            </div>
            </form>
        </div>

        <!-- footer -->

        <div class="text-center ">
            <hr>
            <h3 class="text-dark">TLU'S MUSIC GARDEN</h3>
        </div>

    </div>
</body>
</html>