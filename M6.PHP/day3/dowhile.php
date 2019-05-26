<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Vòng lặp do while
    Cú pháp:
    Sự khởi đầu của vòng lặp
    do{
         //các câu lệnh thực thi của vòng lặp
        sự thay đổi của biến đêm ssau mỗi lần chạy
    }
    while(điều kiện chạy của vòng lặp);

</pre>
<?php
    echo "<br>In ra các số từ 0 đến 20";
    $i = 0;
    do{
        echo "<br>".$i;
        $i++;
    }
    while($i < 21);
    echo "<br>In ra các số chẵn từ 0 đến 20";
    $i = 0;
    do{
        echo "<br>".$i;
        $i += 2;
    }
    while($i < 21);
    echo "<br>In ra các số chẵn từ 0 đến 20";
    $i = 0;
    do{
        if($i % 2 ==0) {
            echo "<br>" . $i;
        }
        $i++;
    }
    while($i < 21);
?>
</body>
</html>