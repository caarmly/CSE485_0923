<?php
//chuyển thành mảng các ký tự thường, dùng print_r hoặc var_dump
    echo '<p style = "color: red">Bài tập số 9</p>';

    $arrs1 = ['1', 'B', 'C', 'E'];
    $arrs2 = ['a', 0, null, false];

    function convertToLower($arr) {
        return array_map('strtolower', $arr);
        // hàm strtolower: hàm có sẵn để chuyển đổi 1 chuỗi thành ký tự thường
        // array_map: áp dụng hàm 'strtolower' lên từng phần tử của mảng và trả về 1 mảng mới chứa kq.
    }

// mảng 1
    $result1 = convertToLower($arrs1);
    echo 'Mảng 1 = ';
    // print_r($result1);
    var_dump($result1);
    // var_dump: hiển thị thông tin chi tiết của biến gồm kiểu dữ liệu của biến và giá trị
    echo '<br><br>';

// mảng 2
    $result2 = convertToLower($arrs2);
    echo 'Mảng 2 = ';
    print_r($result2);
    echo '<br>';
?>