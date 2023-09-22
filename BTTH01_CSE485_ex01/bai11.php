<?php
    echo '<p style = "color: red">Bài tập số 11</p>';

    $array = array(1, 2, 3, 4, 5);

    $indexToRemove = 3; 
    // Vị trí phần tử cần xóa (lưu ý vị trí bắt đầu từ 0)

    array_splice($array, $indexToRemove, 1); 
    //array_splice: xóa phần tử trong mảng dựa trên chỉ mục được chỉ định
    // Xóa 1 phần tử từ vị trí $indexToRemove trong mảng array

    $array = array_values($array); 
    // array_values(): trả về 1 mảng mới chứa tất cả các giá trị của mảng array theo 
    // Đảm bảo các key trong mảng là tuần tự

    print_r($array);
?>