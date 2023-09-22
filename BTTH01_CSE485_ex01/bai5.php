<?php
    echo '<p style = "color: red">Bài tập số 5 </p>';

    $a = [
        'a' => [
            'b' => 0,
            'c' => 1,
        ],

        'b' => [
            'e' => 2,
            'o' => [
                'b' => 3
            ]
        ]
    ];

    $b = $a['b']['o']['b'];
    echo "Giá trị của key là b từ mảng trên là = " . $b . "<br>";

    $c = $a['a']['c'];
    echo "Giá trị của key là c từ mảng trên là = " . $c . "<br>";
    
    $info_a = $a['a'];
    print_r($info_a);       // print_r: hiển thị thông tin chi tiết về tham số của mảng theo định dạng với kiểu của nó.

?>