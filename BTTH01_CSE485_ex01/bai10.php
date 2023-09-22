
<?php
//chuyển thành mảng các ký tự hoa, dùng print_r hoặc var_dump
    echo '<p style = "color: red">Bài tập số 10</p>';

    $arrs1 = ['1', 'b', 'c', 'd'];
    $arrs2 = ['a', 0, null, false];

    function convertToUpper($arr) {
        return array_map('strtoupper', $arr);
        // hàm strtoupper: hàm có sẵn để chuyển đổi 1 chuỗi thành ký tự hoa

    }

// mảng 1
    $result1 = convertToUpper($arrs1);
    echo 'Mảng 1 = ';
    print_r($result1);
    echo '<br><br>';

// mảng 2
    $result2 = convertToUpper($arrs2);
    echo 'Mảng 2 = ';
    print_r($result2);
    echo '<br>';
?>