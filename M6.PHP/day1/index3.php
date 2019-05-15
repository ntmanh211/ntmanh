<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>In ra 1 chuỗi có ký tự '' hoặc ""</h2>
<h2>In ra chuỗi Hello 'World' nên dùng "" bao ''</h2>
<h2>In ra chuỗi Hello "World" nên cùng '' bao ""</h2>
<h2>Bởi PHP cần phân biệt đâu là nháy để bao chuỗi và đâu là nháy cần xuất ra màn hình</h2>
<h2>Để PHP phân biệt được 2 nháy này cần dùng quy tắc</h2>
<ol>
    <li>Trong chuỗi có '' thì dùng "" để bao chuỗi</li>
    <li>Trong chuỗi có "" thì dùng '' để bao chuỗi</li>
</ol>
<?php echo "Hello 'World'";?>
<?php echo '<br> Hello "World"';?>
<h2>In ra chuỗi có nháy đơn Hello 'World'</h2>
<h2> Nếu copy chuỗi có '' vào trong echo''; thì phpstorm sẽ sinh ra escape \
để giúp phân biệt đâu là nháy bao chuỗi đâu là nháy xuất ra màn hình</h2>
<h2>Nháy đơn có escape \ trước \' thì php sẽ hiểu đây là chuỗi cần xuất ra màn hình</h2>
<?php echo 'Hello \'World\'';?>
<h2>Tương tự với ""</h2>
<?php echo "Hello \"World\"";?>
</body>
</html>