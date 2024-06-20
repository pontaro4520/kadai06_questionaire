<?php

$time = $_GET['date'];
$material = $_GET['material'];
$form = $_GET['form'];
$thickness = $_GET['thickness'];
$size = $_GET['size'];
$price = $_GET['price'];



//文字作成

// $data = $time . 'test' . "\n";

$data = $time . $material . $form . $thickness . $size . $price . "\n";

file_put_contents('data/data.txt' , $data, FILE_APPEND);


?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>入力成功！</h1>
    <h2>↓をクリックして入力内容を確認してください</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="index.php">戻る</a></li>
    </ul>
</body>

</html>
