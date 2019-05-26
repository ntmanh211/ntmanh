<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Sự khác biệt giữa vòng lặp while và dowhile là:
        - Vòng lặp while chỉ chạy khi điều kiện == true
        - Vòng lặp do while sẽ chạy lần đầu tiêng ngày cả khi điều kiện == false
        Từ lần thứ 2 trở đi vòng lặp dowhile chỉ chạy khi điều kiện == true

</pre>
<?php
    $n = 20;
    while ($n < 10){
        echo "<br> while $n";
        $n++;
    }

    $n = 20;
    do {
        echo "<br>do...while $n";
        $n++;
    }
    while($n < 10);

?>
</body>
</body>
</html>