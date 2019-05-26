<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Vòng lặp trong PHP
    Vòng lặp thực hiện chu trình theo 1 số lần nhất định
    Ví dụ: Vòng lặp các thứ trong tuần
    Chạy từ chủ nhật cho đến thứ 7 hàng tuần sau đó sẽ lặp lại
    Vòng lặp for:
     1 - Điểm bắt đầu của vòng lặp
     2 - Điều kiện chạy của vòng lặp
     3 - Sự thay đổi của biến đếm sau mỗi lần chạy của vòng lặp
    Cú pháp lệnh for:
    for(điểm bắt đầu; điều kiện chạy vòng lặp; sự thay đổi của biến đếm){
        //code thực thi vòng lặp
    }

</pre>
<?php
    echo "In ra các số từ 0 đến 20";
    for ($i = 0; $i < 21; $i++){
        echo "<br>".$i;
    }
?>
</body>
</html>