<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    VÍ dụ là kiểu dữ liệu dạng số, chuỗi, float, boolean... thì chỉ chứa
    giá trị đơn 3, "abc", true, false, null
    Nếu muốn lưu trữ nhiều giá trị thì sẽ phải sử dụng kiểu dữ liệu dạng mảng
    Mảng có 3 loại chính:
        - Mảng chỉ số(index) có key là số
        - Mảng kết hợp: có key là chuỗi
        - Mảng đa chiều: mảng lồng mảng
    Tìm hiểu về mảng chỉ số:
    Mảng này sẽ chứa nhiều phần tử phân tách bằng dấu,
    Các phần tử này thì sẽ có 2 thành phần
    Thành phần 1 là key(hiểu đơn giản là số thứ tự)
    Thành phần 2 là value(hiểu là giá trị)
    <img src="Screenshot.png">
</pre>
<?php
    $arr1 = array(2, 4, 6, 8, 10, 12);
    echo "<pre>";
    print_r($arr1);
    echo "<pre>";
?>
<pre>
    Các cách khai báo mảng chỉ số
    Chú ý mảng chỉ số bắt đầu từ 0
</pre>
<?php
    //Cách 1: Truyền value vào
    $arr1 = array(2, 4, 6, 8, 10);
    //Cách 2: Truyền cả key và value vào
    $arr2 = array(0 => 2, 1 => 4, 2 => 6);
    //Cách 3: Khai báo mảng trước rồi mới gán giá trị
    $arr3 = array();
    $arr3[] = 2;
    $arr3[] = 4;
    $arr3[] = 6;
    $arr3[] = 8;
    $arr3[] = 10;
    //Cách 4: Gần giống cách số 3 nhưng sẽ truyền key vào
    $arr4 = array();
    $arr4[0] = 2;
    $arr4[1] = 4;
    $arr4[2] = 6;
    $arr4[3] = 8;
    $arr4[4] = 10;
?>
<pre>
    Truy cập vào các phần tử của mảng thông qua key và thay đổi giá trị của chúng

</pre>
<?php
    $arr1 = [2, 4, 6, 8, 10];
    echo "<br>".$arr1[1];
    echo "<br>".$arr1[3];

    echo "<pre>";
   print_r($arr1);
    echo "<pre>";

    $arr1[1] = 20;
    $arr1[2] = 30;
    echo "<pre>";
    print_r($arr1);
    echo "<pre>";

?>
</body>
</html>