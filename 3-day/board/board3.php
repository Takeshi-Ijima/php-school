<?php
    $host = 'localhost';
    $db = 'board_db';
    $user = 'board_user';
    $pass = 'board_pass';
    // ホスト、データベース、ユーザー名、パスワードを変数に代入

    $link = mysqli_connect($host, $user, $pass, $db);
    // mysqli_connect
        // 新規に MySQL サーバへの接続をオープンする関数
    // echo "<pre>";
    // var_dump($link);
    // echo "</pre>";

    if($link !== false){
        // mysqli_connectは失敗した場合に FALSE を返します。
        // つまり、$linkがfalseでなければ以下の内容の実行に移る

        $query = 'select id, name, contents from board';
        // $queryには select id, name, contents from boardというSQL文が代入されている

        $res = mysqli_query($link, $query);
        // $res には
        // mysqli_query
            // データベース上でクエリを実行する
            // 第一引数には接続するデータベース、第二引数にはクエリ文を入れる

        $data = [];
        // $dataを配列として設定。

        while($row = mysqli_fetch_assoc($res)){
            // mysqli_fetch_assoc
                // 結果の行を連想配列で取得する
            // echo "<pre>";
            // var_dump($row);
            // echo "</pre>";
            $data[] = $row;
            // $rowを$dataの配列に入れる
        }
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        arsort($data);
        // arsort();
            // 連想キーと要素との関係を維持しつつ配列を逆順にソートする
    }else{
        echo "接続エラー";
    }
    mysqli_close($link);
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>掲示板</title>
    </head>
    <body>
        <form action="" method="post">
            name : <input type="text" name="name" value=""><br>
            contents<br>
            <textarea name="contents" rows="8" cols="80"></textarea>
            <input type="submit" name="send" value="送信">
        </form>

        <hr>
        <?php
            foreach($data as $field){
                echo "ID : ".$field['id']."<br>";
                echo "Name : ".$field['name']."<br>";
                echo "Comments : ".$field['contents']."<br>";
            }
         ?>
    </body>
</html>
