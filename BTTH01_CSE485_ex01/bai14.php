<?php
    echo '<p style = "color: red">Bài tập số 14</p>';

    $array1 = [
        [77, 87],
        [23, 45]
    ];

    $array2 = [
        'giá trị 1', 'giá trị 2'
    ];

    $result = [];   // khởi tạo mảng rỗng để chứa kết quả gộp
    
    foreach ($array2 as $key => $value) {
        $result[$key] = array_merge([$value], $array1[$key]);
        // array_merge: gộp nhiều mảng thành 1 mảng duy nhất
    }
    
    print_r($result);
?> 