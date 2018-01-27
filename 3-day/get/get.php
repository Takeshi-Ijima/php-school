<?php
    var_dump($_GET);
    $data = [
        '渡辺',
        '佐藤',
        '田中',
    ];

    $id = (isset($_GET['id']) === true) ? $_GET['id'] : '';
    if($id !== '') echo $data[$id];
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>getテスト</title>
    </head>
    <body>
        <br>
        <a href="get.php?id=0">クリックすると渡辺さんが表示される</a><br>
        <a href="get.php?id=1">クリックすると佐藤さんが表示される</a><br>
        <a href="get.php?id=2">クリックすると田中さんが表示される</a><br>
    </body>
</html>
