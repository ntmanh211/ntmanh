<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
Khi biến trong PHP mà cộng, trừ, nhân, chia lấy dư với chính nó thì
các bạn sẽ có cách viết rút gọn là chuyển toán tử lên trước dấu bằng
$a = $a + 5 => $a += 5
$a = $a - 5 => $a -= 5
$a = $a * 5 => $a *= 5
$a = $a / 5 => $a /= 5
    Toán tử ++ là toán tử tăng thêm 1 đơn vị
    Toán tử -- là giảm đi 1 đơn vị
</pre>
<?php
$a = 5;
$a++;
echo $a;
?>
</body>
</html>