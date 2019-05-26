<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Xử lý thời gian trong PHP
    Cú pháp hàm date(format, time)
    date(format): lấy ra thời gian hiện tại
    Thời gian thì có thể đọc được
    Định dạng format:
    d: đại diện cho ngày từ 1-31
    D: Mon - Sun ngày ở dạng text
    m: tháng 1-12
    M: Tháng dạng text Jan - Dec
    Y: Năm
    h: giờ 0-12
    H: giờ 0-23
    s: giây
    i: phút
</pre>
<?php
echo "<br> date('d/m/Y')".date("d/m/Y");
echo "<br> date('D/m/Y')".date("D/m/Y");
echo "<br> date('D/M/Y')".date("D/M/Y");
echo "<br> date('D/M/Y h:i:s')".date("D/M/Y h:i:s");
echo "<br> date('D/M/Y h:i:s')".date("D/M/Y h:i:s");
?>
<pre>
    Kiểu thời gian timestamp
    Kiểu này không đọc được chính xác là ngày tháng năm nào nhưng có thể tính toán
    công trừ được
    hàm time() lấy ra thời gian hiện tại nhưng ở dạng timestamp
</pre>
<?php
    $timestamp_now = time();
    $timestamp_next_month = time() + (60*60*24*30);
    echo '<br> tính 30 ngày tiếp theo - date("d/m/Y", $timestamp_next_month):'.$timestamp_next_month."-- " . date('d/m/Y', $timestamp_next_month);
?>
<pre>
    vấn đề 2: chuyển đổi định dạng thời gian date() về timestamp
    Giải quyết: strtotime()
    Hàm này sẽ chuyển đổi 1 số chuỗi thành thời gian timestamp nhưng hàm này
    lại chỉ hỗ trợ 1 số kiểu điịnh dạng thời gian như:
    2019 - 05 - 26: Y/m/d
    26 - 05 - 2019: d/m/Y
    Nếu không phải kiểu định dạng nó hỗ trợ nó sẽ trả về false
    Quan sát kết quả của hàm var_dump() bên dưới:

</pre>
<?php
    $str_date = "2019-05-26";
    // chuyển đổi thành dạng timestamp
    echo "<br>"; var_dump(strtotime($str_date));
    $str_date1 = "26-05-2019";
    echo "<br>"; var_dump(strtotime($str_date1));
    $str_date2 = "26/05/2019";
    echo "<br>"; var_dump(strtotime($str_date2));
    $str_date3 = "05/26/2019";
    echo "<br>"; var_dump(strtotime($str_date3));
    echo '<br> strtotime($str_date)'.$str_date."..".strtotime($str_date);
?>
<pre>
    Hàm mktime() trả về timestamp từ các tham số được truyền vào
    mktime(hour, minute, second, month, day, year)
    Nếu không có tham số được truyền vào thì nó sẽ lấy timestamp hiện tại
</pre>
<?php
    echo "<br> mktime()".mktime();
    echo "<br> mktime(05, 30, 30, 26, 05, 2019):".mktime(05, 30, 30, 26, 05, 2019);
?>
</body>
</html>