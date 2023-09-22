<?php
    echo '<p style = "color: red">Bài tập số 7</p>';

    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

    $result = array_filter($array, function($n){
        // array_filter: lọc các phần tử trong mảng $array dựa trên điều kiện trong hàm function
        return $n >= 100 && $n <= 200 && $n % 5 === 0 ;
    });
      
    foreach($result as $result){
        echo $result . '<br>';
    }

?>