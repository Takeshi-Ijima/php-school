<?php
    $host = 'localhost';
    $db = 'board_db';
    $user = 'board_user';
    $pass = 'board_pass';

    $link = mysqli_connect($host, $user, $pass, $db);
    if($link !== false){
        $msg = '';
        $err_msg = '';

        if(isset($_POST['send']) === true){
            // var_dump($_POST);
            $name = $_POST['name'];
            $contents = $_POST['contents'];

            if($name !== '' && $contents !== ''){
                $query = "insert into board("
                    . "name,"
                    . "contents"
                    . ") values ("
                    . "'".mysqli_real_escape_string($link, $name). "',"
                    . "'".mysqli_real_escape_string($link, $contents)."'"
                    . ")";

                    // mysqli_real_escape_string
                        // 接続の現在の文字セットを考慮して、SQL 文で使用する文字列の特殊文字をエスケープされる
                        // 第一引数　接続するデータベース
                        // 第二引数　エスケープする文字列

                $res = mysqli_query($link, $query);
                // mysqli_query
                    // データベース上でクエリを実行する
                    // 第一引数　接続データベース
                    // 第二引数　クエリ文字列

                // var_dump($res);
                // mysqli_query
                    // 失敗した場合に FALSE を返します

                if($res !== false){
                    // resがfalseでなければ
                    $msg = '書き込み成功';
                }else{
                    // $resがfalseであれば
                    $err_msg = '失敗';
                }
            }else{
                $err_msg = '名前とコメントを入力してください';
            }
        }else{

        }

        $query = "select id, name, contents from board";
        $res = mysqli_query($link, $query);
        $data = [];
        while($row = mysqli_fetch_assoc($res)){
            // mysqli_fetch_assoc
                // $resで接続されているデータベースから連想配列として結果の行を取得する
                // 結果の行を連想配列で取得する
            array_push($data, $row);
            // array_push
                // 一つ以上の要素を配列の最後に追加する
                // $dataに
        }
        arsort($data);
        // 配列の順番を逆にする
    }else{
        echo "データベース接続失敗";
    }
    mysqli_close($link);
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>board4 / </title>
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
            if($msg !== '') echo $msg."<br>";
            if($err_msg !== '') echo $err_msg."<br>";
         ?>
        <hr>
        <?php
            foreach($data as $key => $val){
                echo $key.".".$val['name']." : ".$val['contents']."<br>";
            }
         ?>
    </body>
</html>
