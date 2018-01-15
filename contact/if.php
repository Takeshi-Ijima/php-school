<!DOCTYPE HTML PUBLIC "-/W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title>PHPスクール1日目-if.php</title>
    </head>
    <body>
        <?php //phpの始まり


            echo '斎藤 友彦';
            echo '<br>';
            echo 'サイトウ トモヒコ';

            $x = '10';

            echo '<br>';

            $if = '0';
            if($if === ''){
                echo "empty";
            }else{
                echo "not empty";
            }
            echo "<br>";
            if($x === 10){
                echo '10';
            }else{
                echo "not 10";
            }
            echo "<br>";

            $my_score = 70;

            if($my_score >= 80){
                echo "がんばりました。";
            }else if($my_score >= 60){
                echo "もう一歩です";
            }else if($my_score >= 40){
                echo "頑張りましょう";
            }else{
                echo "ダメダメです";
            }
            echo "<br>";

            $a = 10;
            $b = 7;
            if($a === 10 && $c === 8){
                echo "OK";
            }else{
                echo "NG";
            }
            echo "<br>";

            $a = '0';
            if(empty($a) === true){
                echo "からです";
            }
            echo "<br>";

            if($a !== ''){
                echo "値が入っています";
            }else{
                echo "空白です";
            }
         ?>
    </body>
</html>
