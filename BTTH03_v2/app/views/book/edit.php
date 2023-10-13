
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Thư Viện</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>
<body>
  <div class="container">
    <h2 class='text-center text-success'>Chỉnh Sửa Các Sách</h2>

    <form action="" method="POST">
      <div class="form-group">
        <label for="">Tên sách:</label>
        <input type="text" class="form-control" id="" name="tenBH" required>
      </div>
        <br>
      <div class="form-group">
        <label for="">Ngày xuất bản:</label>
        <input type="text" class="form-control" id="" name="caSi" required>
      </div>
        <br>
      <div class="form-group">
        <label for="">Mã thể loại:</label>
        <input type="text" class="form-control" id="" name="idTL" required>
      </div>
        <br>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" name='btn-edit'>Sửa</button>
        <a href="<?= 'http://localhost/BTTH03_v2/public/'; ?>" class="btn btn-primary">Quay lại</a>
      </div>
      <br>
    </form>

  </div>

  <!-- Thêm các tệp JavaScript của Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>