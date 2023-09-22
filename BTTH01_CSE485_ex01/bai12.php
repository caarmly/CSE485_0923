<?php
    echo '<p style = "color: red">Bài tập số 12</p>';

    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];
// lấy ra phần tử đầu tiên, phần tử cuối cùng trong mảng numbers
    echo "Phần tử đầu tiên: " . reset($numbers) . '<br>';
    // reset($numbers):  lấy phần tử đầu tiên trong mảng numbers

    echo "Phần tử cuối cùng: " . end($numbers) . '<br>';
    // end(numbers): lấy phần tử cuois cùng trong mảng numbers
    echo '<br>';
// tìm số lớn nhất, nhỏ nhất, tổng giá trị từ mảng
    echo "Phần tử lớn nhất: " . max($numbers) . '<br>';

    echo "Phần tử nhỏ nhất: " . min($numbers) . '<br>';

    echo "Tổng giá trị của mảng: " . array_sum($numbers) . '<br>';
    echo '<br><br>';

// sắp xếp mảng theo chiều tăng, giảm của các giá trị
 
    // asort: Sắp xếp tăng dần theo giá trị
    asort($numbers);
    echo 'Mảng tăng dần theo các giá trị: ';
    print_r($numbers);
    echo '<br>';
    
    // arsort: Sắp xếp giảm dần theo giá trị
    arsort($numbers);
    echo 'Mảng giảm dần theo giá trị: ';
    print_r($numbers);
    echo '<br><br>';

// sắp xếp mảng theo chiều tăng, giảm các key
    // ksort: Sắp xếp tăng dần theo key
    ksort($numbers);
    echo 'Mảng tăng dần theo các giá trị: ';
    print_r($numbers);
    echo '<br>';
    
    // arsort: Sắp xếp giảm dần theo key
    krsort($numbers);
    echo 'Mảng giảm dần theo giá trị: ';
    print_r($numbers);
    echo '<br><br>';
    
?>