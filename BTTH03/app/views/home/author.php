
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý thư viện</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>
<body>
    <div class="container">
        <h3 class="text-center text-success text-uppercase my-3">Danh sách các tác giả</h3>
        <a href="<?= DOMAIN.'app/views/author/add.php'; ?>" class="btn btn-success">Thêm mới</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã tác giả</th>
                    <th scope="col">Tên tác giả</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach($authors as $author){

                ?>

                    <tr>
                        <th scope="row"><?= $author->getId(); ?></th>
                        <td><?= $author->getAuthorName(); ?></td>
                        
                        <td>
                            <a href="<?= DOMAIN.'app/views/author/edit.php?id='.$author->getId() ?>"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                            <a href=""><i class="bi bi-trash"></i></a>
                        </td>
                        </tr>
                    <tr>

                <?php
                }                   
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>