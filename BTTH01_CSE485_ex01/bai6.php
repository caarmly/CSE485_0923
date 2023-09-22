<?php
    echo '<p style = "color: red">Bài tập số 6</p>';

    $keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
    );

    $values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
    );

    $keysAndValues = array_combine($keys, $values);
    // hàm array_combine(): tạo mảng mới bằng cách kết hợp 2 mảng.

    foreach ($keysAndValues as $key => $value) {
        echo "     \"$key\"        =>      \"$value\"     <br>";
        // \": in ra dấu "
    }

    
?>