<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Các toán tử phổ biến trong PHP</h2>
<h2> Trong PHP sử dụng dấu . để nối chuỗi</h2>
<?php
    $a = 3;
    $b = 5;
    $tong = $a + $b;
    $hieu = $b - $a;
    $tich = $a * $b;
    $thuong = $b/$a;
    $sodu = $b % $a;
    echo "<br> Tổng của 2 số là :".$tong;
    echo "<br> Hiệu của 2 số là :".$hieu;
    echo "<br> Tích của 2 số là :".$tich;
    echo "<br> Thương của 2 số là :".$thuong;
    echo "<br> Số dư của 2 số là :".$sodu;
?>
</body>
</html>