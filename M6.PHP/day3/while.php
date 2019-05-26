<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Vòng lặp while
    Cú pháp:
    Điểm khởi đầu của vòng lặp
    while(ĐIều kiện chạy của vòng lặp){
        //code thực thi bên trong vòng lặp
         Sự thay đổi của biến sau mỗi vòng lặp
    }
</pre>
<?php
    echo "<br>In ra các số từ 0 đến 20";
    $i = 0;
    while (i < 21){
        echo "<br>".$i;
        $i++;
    }
    echo "<br>In ra các số chẵn từ 0 đến 20";
    $i =0;
    while (i < 21){
        echo "<br>".$i;
        $i += 2;
    }
    $i=0;
    while (i < 21){
        if ($i%2 == 0){
            echo "<br>".$i;
        }
        $i++;
    }
?>
</body>
</html>