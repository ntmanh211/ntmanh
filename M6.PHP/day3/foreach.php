<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Vòng lặp foreach chỉ dùng để lặp mảng
    Cú pháp ngắn gọn :
        foreach($mang as $value){
            //code thực thi
            echo "<br>".$value;
        }
    Cú pháp đầy đủ:
        foreach($mang as $value){
            //code thực thi
            echo "<br>".$value."-".$value;
        }

</pre>
<?php
    $arr1 = array(2, 4, 6, 8, 10);
    echo "<br> Rút gọn";
    foreach ($arr1 as $value){
        echo "<br>".$value;
    }
    echo "<br>Đầy đủ";
    foreach ($arr1 as $key => $value){
        echo "<br> Key là:".$key;
        echo "<br> Value là:".$value;
    }
?>
</body>
</html>