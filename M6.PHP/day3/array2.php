<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Mảng kết hợp là mảng có ít nhất 1 key là chuỗi

</pre>
<?php
    //Cách 1:
        $cities = array(
            'hn' => 'Hà Nội',
            'dn' => 'Đà Nẵng',
            'hcm' => 'Hồ chí Minh',
            'ct' => 'Cần thơ',
            'dl' => 'Đà Lạt'
        );
        echo "<pre>";
        print_r($cities);
        echo "<pre>";
     //cách 2:
        $cities = array();
        $cities['hn'] = "Hà Nội";
        $cities['dn'] = "Đà Nẵng";
        $cities['hcm'] = "Hồ Chí Minh";
        $cities['ct'] = "Cần Thơ";
        $cities['dl'] = "ĐÀ Lạt";
        echo "<pre>";
        print_r($cities);
        echo "<pre>";
    //Truy cập vào các phần tử của mảng qua key
        echo '<br> $cities["hn"]:'.$cities['hn'];
        echo '<br> $cities["hcm"]:'.$cities['hcm'];
        foreach ($cities as $key_city => $city){
            echo "<br> Key: ". $key_city;
            echo "<br> Value: ". $city;
        }
?>
</body>
</html>