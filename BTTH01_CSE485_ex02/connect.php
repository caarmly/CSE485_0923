<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "btth01_cse485_ex02.sql";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
} catch(PDOException $e) {
    // echo "Kết nối thất bại: " . $e->getMessage();
}
return null;
?>
