<?php
    echo '<p style = "color: red">Bài tập số 8</p>';

    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $maxLengthString = $array[0];
    $minLengthString = $array[0];

    foreach ($array as $string) {
        $length = strlen($string); //strlen(): trả về số ký tự trong chuỗi, bao gồm cả khoảng trắng và các ký tự đặc biệt

        if ($length > strlen($maxLengthString)) {
            $maxLengthString = $string;
        }

        if ($length < strlen($minLengthString)) {
            $minLengthString = $string;
        }
    }

    echo "Chuỗi lớn nhất là \"$maxLengthString\", độ dài = " . strlen($maxLengthString) . "<br>";
    echo "Chuỗi nhỏ nhất là \"$minLengthString\", độ dài = " . strlen($minLengthString);
?>