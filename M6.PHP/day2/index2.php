<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Câu lệnh điều kiện trong PHP</h1>
<?php
    $age = 19;
    if ($age < 18){
        echo "Trẻ em";
    }
    elseif (($age < 50) &&($age > 18)){
        echo "Người trưởng thành";
    }
    else {
        echo "Người già";
    }
?>
</body>
</html>