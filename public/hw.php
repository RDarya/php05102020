<?php
$title = 'Lesson 2';
$content = 'functions';
$date = date('Y-m-d');


$a = 5;
$b = 7;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1><?= $title?></h1>
<p><?= $content?></p>
<p><?= $date?></p>
    <option value=""></option>
</body>
</html>
