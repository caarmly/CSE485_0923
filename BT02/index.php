<?php
    session_start();
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css" />
    <title>W3CMS</title>
</head>

<body>
     <!-- /#sidebar-wrapper -->
    <div class="d-flex" id="wrapper">
        <!-- d-flex: thiết lập div thành 1 khung linh hoạt-->
        <div id="sidebar-wrapper">
            <div>
                <img src= "img/logo.png" alt="">
            </div>
                
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    <i class="bi bi-person me-2"></i>User
                    <!-- me-2:khoảng cách biên phải cho phần tử icons -->
                </a>   

                <a href="#" class="list-group-item active">
                    <i class="bi bi-grid me-2"></i>Dashboard
                </a>

                <a href="#" class="list-group-item active">
                    <i class="bi bi-book me-2"></i>Courses
                </a>

                <a href="#" class="list-group-item active">
                    <i class="bi bi-people me-2"></i>Intructor
                </a>

                <a href="#" class="list-group-item active">
                    <i class="bi bi-info-circle me-2"></i>Apps
                </a>

                <a href="#" class="list-group-item active">
                    <i class="bi bi-pie-chart me-2"></i>Charts
                </a>

                <a href="#" class="list-group-item active">
                    <i class="bi bi-star me-2"></i>Boostrap
                </a>

                <a href="#" class="list-group-item active">
                    <i class="bi bi-heart me-2"></i>Plugins
                </a>

                <a href="#" class="list-group-item active">
                    <i class="bi bi-gear-wide me-2"></i>Widget
                </a>

                <a href="#" class="list-group-item active">
                    <i class="bi bi-file-earmark-check me-2"></i>Forms
                </a>

                <a href="#" class="list-group-item active">
                    <i class="bi bi-file-earmark-spreadsheet me-2"></i>Table
                </a>

                <a href="#" class="list-group-item active">
                    <i class="bi bi-file-earmark-break me-2"></i>Pages
                </a>
            </div>
        </div>
       
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="d-flex">
                <i class="bi bi-list me-2 my-2" id="menu-toggle"></i>
                <h3>Users</h3>

                <div class="search d-flex my-2 ms-auto">
                    <i class="bi bi-search"></i>
                    <input class="form-control" type="text" placeholder="Search here..." >
                </div>
            </div>

            <div class ="filter">

            </div>

            <div class="users">
                <div class="row my-10">
                    <h3 class="fs-3 ms-3 my-3" style="color: #ff3c26;">Users<span style="float:right">
                    <a href="add.php" class="btn btn-primary float-end me-5">Add Users</a></span></h3> 
                    <!-- fs: font size -->
                    <hr style='width:1000px; margin-left:10px;'>
                    <div class="col-md-11 ms-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>FullName</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                    $query = "SELECT * FROM users";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $user)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $user['id']; ?></td>
                                                <td><?= $user['fullName']; ?></td>
                                                <td><?= $user['email']; ?></td>
                                                <td><?= $user['mobile']; ?></td>
                                                <td>                                                   
                                                    <a href="edit.php?id=<?= $user['id']; ?>" class="btn btn-success btn-sm"><i class="bi bi-pen"></i></a>

                                                    <form action="code.php" method="POST" class="d-inline">

                                                        <button type="submit" name="delete" value="<?=$user['id'];?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                                        
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var list = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");
        // hàm xử lý sự kiện khi bấm vào nút chuyển đổi
        toggleButton.onclick = function () {
            list.classList.toggle("toggled");
            // classList: Đây là một thuộc tính của đối tượng phần tử HTML,
            // cụ thể là một danh sách các lớp CSS được gắn với phần tử đó. 
            // classList cho phép bạn thao tác với các lớp CSS trên phần tử.

            // .toggle("toggled"): Đây là một phương thức của classList, được sử dụng để thêm hoặc loại bỏ lớp có tên "toggled" từ danh sách các lớp của phần tử. 
            // Nếu phần tử đã có lớp "toggled", thì phương thức này sẽ loại bỏ nó.
            //  Nếu phần tử chưa có lớp "toggled", thì phương thức này sẽ thêm nó vào.
        };
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
