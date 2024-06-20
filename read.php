<?php
// ファイルを開く
$data = file_get_contents('data/data.txt');

echo nl2br($data);

// ファイル内容を1行ずつ読み込んで出力

// ファイルを閉じる
?>


<html>

<head>
    <meta charset="utf-8">
    <title>入力成功</title>
</head>

<body>

    <ul>
        <li><a href="index.php">入力画面に戻る</a></li>
    </ul>
</body>

</html>