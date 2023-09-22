<?php
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
    function calculate($arrs) {
        $sum = array_sum($arrs);   //array_sum: hàm tính tổng có sẵn  
        $difference = $arrs[0];
        $product = $arrs[0];
        $quotient = $arrs[0];
    
        // Tính hiệu, tích và thương của các phần tử trong mảng
        for ($i = 1; $i < count($arrs); $i++) {
            $difference -= $arrs[$i];
            $product *= $arrs[$i];
            
            // Kiểm tra xem có chia cho 0 hay không trước khi tính thương
            if ($arrs[$i] == 0) {
                $quotient = "Không thể chia cho 0";
            } else {
                $quotient /= $arrs[$i];
            }
        }
    
        // Trả về kết quả dưới dạng mảng
        return array(
            'sum' => $sum,
            'difference' => $difference,
            'product' => $product,
            'quotient' => $quotient
        );
    }
    
    $result = calculate($arrs);
    
    // In kết quả
    echo '<p style = "color: red">Bài tập số 1 </p>';

    echo "Tổng các phần tử = " . implode("+", $arrs) . "= " . $result['sum'] . "<br>";
    echo "Tích các phần tử = " . implode("*", $arrs) . "= " . $result['product'] . "<br>";
    echo "Hiệu các phần tử = " . implode("-", $arrs) . "= " . $result['difference'] . "<br>";
    echo "Thương các phần tử = " . implode("/", $arrs) . "= " . $result['quotient'] . "<br>";

    //hàm implode: nối các phần tử của mảng thành 1 chuỗi duy nhất

?>