<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h3>Các hàm xử lý chuỗi trong PHP </h3>
<ol>
    <li>strlen() là hàm đến số thứ tự trong chuỗi</li>
    <li>str_word_count() là hàm đếm số từ trong 1 chuỗi</li>
    <li>strpos() tìm kiếm 1 chuỗi con trong 1 chuỗi mẹ và trả về false nếu không tìm được,
    trả về vị trí bắt đầu của chuỗi con trong chuỗi mẹ</li>
    <li>str_replace() thay thế chuỗi 1 thành chuỗi 2 trong 1 chuỗi mẹ</li>
</ol>
<?php
    $str = "Nguyễn Thị Minh Ánh";
    echo "Độ dài chuỗi: ".strlen($str);
    echo "<br>Số từ trong chuỗi:".str_word_count($str);
?>
</body>
</html>