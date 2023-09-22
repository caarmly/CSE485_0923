<?php
    echo '<p style = "color: red">Bài tập số 2</p>';

    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
    $names = ['Anh', 'Sơn', 'Thắng', 'tôi'];
    
    $result = '';

    foreach ($arrs as $key => $color) {
        $result .= "Màu $color là màu yêu thích của " . $names[$key];
        if ($key < count($arrs) - 1) {
            $result .= ', ';
        } else {
            $result .= '.';
        }
    }

    echo $result.'<br>';
?>