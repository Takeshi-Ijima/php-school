<?php
    if(isset($_POST['send']) === true){
        $name = $_POST['name'];
        $comment = $_POST['comment'];

        if($name !== '' && $comment !== ''){
            $fp = fopen('board-data.text', 'a');
            if(flock($fp, LOCK_EX)=== true){
                fwrite($fp, $name."¥t".$comment."¥n");
                flock($fp, LOCK_UN);
            }
        }else{
            echo "空白禁止です。";
        }
    }

    $fp = fopen('board-data.text', 'r');
    $lineArray3 = [];
    while($res = fgets($fp)){
        $lineArray = explode("¥t", $res);
        $lineArray2 = [
            'name' => $lineArray[0],
            'comment' => $lineArray[1],
        ];
        $lineArray3[] = $lineArray2;
    }
    fclose($fp);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>掲示板</title>
    </head>
    <body>
        <form action="" method="post">
            <label>名前 : <input type="text" name="name" valuse=""></label>
            <p>コメント</p>
            <textarea name="comment" rows="8" cols="80"></textarea>
            <label><input type="submit" name="send" value="書き込む"></label>
        </form>
        <?php
            foreach($lineArray3 as $value){
                echo "お名前 : ".$value['name']."<br>";
                echo "コメント : ".$value['comment']."<br>";
                echo "<hr>";
            }
         ?>
    </body>
</html>
