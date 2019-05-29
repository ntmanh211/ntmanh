<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Mảng đa chiều là mảng lồng mảng
    Tức là mỗi phần tử cuản mảng là 1 mảng con
</pre>
<?php
    $cities = array();
    $cities['hn'] = array(
        'name' => 'Hà Nội',
        'district' => array(
            'hbt' => array(
                'name' => 'Hai Bà Trưng',
                'unit' => array('phường 1', 'phường 2', 'phường 3')
            ),
            'tx' => array(
                'name' => 'Thanh Xuân',
                'unit' => array('phường 1', 'phường 2', 'phường 3')
            ),
            'cg' => array(
                'name' => 'Cầu Giấy',
                'unit' => array('phường 1', 'phường 2', 'phường 3')
            )
        )

    );
    $cities['hcm'] = array(
        'name' => 'Hồ Chí Minh',
        'district' => array(
            'hbt' => array(
                'name' => 'Quận Nhất',
                'unit' => array('phường 1', 'phường 2', 'phường3')
            ),
            'tx' => array(
                'name' => 'Quận 7',
                'unit' => array('phường 1', 'phường 2', 'phường 3')
            ),
            'cg' => array(
                'name' => 'Quận 9',
                'unit' => array('phường 1', 'phường 2', 'phường 3')
            )
        )
    );
    echo "<pre>";
    print_r($cities);
    echo "<pre>";
    foreach ($cities as $key_citi => $city){
        echo "<ul>";
        echo $city['name'];
        foreach ($city['district'] as $key_district => $district){
            echo "<li>";
            echo $district["name"];
            foreach ($district['unit'] as $key_unit => $unit){
                echo "<p style='padding-left: 30px'>";
                echo $unit;
                echo "</p>";
            }
            echo "</li>";
        }
        echo "</ul>";
    }
?>
</body>
</html>