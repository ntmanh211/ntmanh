<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Cú pháp lênh switch case
    n là giá trị của biến hoặc là biến
    switch(n) {
            case label1:
                // code chạy khi mà n == label1
                break;
            case label2:
                // code chạy khi mà n == label2
                break;
            ...
            default:
                // code chạy khi mà n khác tất cả các trường nói trên

        }
</pre>
<?php
    $d = date('D');
    echo "<br> thứ hiện tại là: .$d";
    switch ($d) {
        case "Sun":
            echo "<br>Hôm nay là chủ nhật";
            break;
        case "Mon":
            echo "<br>Hôm nay là thứ 2";
            break;
        case "Tue":
            echo "<br>Hôm nay là thứ 2";
            break;
        case "Wed":
            echo "<br>Hôm nay là thứ 4";
            break;
        case "Thu":
            echo "<br>Hôm nay là thứ 5";
            break;
        case "Fri":
            echo "<br>Hôm nay là thứ 6";
            break;
        case "Sat":
            echo "<br>Hôm nay là thứ 7";
            break;

    }
?>
</body>
</html>