<!DOCTYPE HTML PUBLIC "-/W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title>PHPスクール1日目-while_foreach_for.php</title>
    </head>
    <body>
        <?php
            $i = 1;
            while($i <= 10){
                echo $i . "<br>";
                $i++;
            }
            echo "<br>". '<hr>' . "<br>";

            for($i = 1; $i <= 10; $i++){
                echo "{$i}<br>";
            }
            echo "<br>". '<hr>' . "<br>";

            $arr = [
                'saito',
                'tomoki',
                'chiba',
                'PHP'
            ];
            // echo $arr[0];
            // echo $arr[1];
            // echo $arr[2];
            // echo $arr[3];
            $num = count($arr);
            for($i = 0; $i <= $num; $i++){
                echo "{$arr[$i]} <br>";
            }
            echo "<br>". '<hr>' . "<br>";

            foreach($arr as $key => $value){
                echo $key . " : " . $value . "<br>";
            }
            echo "<br>". '<hr>' . "<br>";

            $label_arr = [
                'family_name' => 'saito',
                'first_name' => 'tomoki',
                'pref' => 'chiba',
                'language' => 'PHP'
            ];
            foreach($label_arr as $label => $date){
                echo $label. " : " . $date . "<br>";
            }
            echo "<br>". '<hr>' . "<br>";

            $excel_arr = [
                [
                    'family_name' => 'saito',
                    'first_name' => 'tomohiki',
                    'pref' => 'chiba',
                    'age' => '33',
                    'language' => 'PHP'
                ],
                [
                    'family_name' => 'tanaka',
                    'first_name' => 'youhei',
                    'pref' => 'kanagawa',
                    'age' => '19',
                    'language' => 'C'
                ],
                [
                    'family_name' => 'sato',
                    'first_name' => 'ichiro',
                    'pref' => 'kanagawa',
                    'age' => '28',
                    'language' => 'Java'
                ],
            ];
            foreach($excel_arr as $no => $member_data){
                echo "No : {$no}<br>" ;
                echo "family_name : {$member_data['family_name']} <br>";
                echo "first_name : {$member_data['first_name']}<br>";
                echo "pref : {$member_data['pref']}<br>";
                echo "age : {$member_data['age']}<br>";
                echo "language : {$member_data['language']}<br>";
                echo "<br>";
            }
            echo "<br>". '<hr>' . "<br>";


            $j = 1;
            $flg = true;
            while($flg === true){
                // jが10になったら終了する
                if($j === 10){
                    $flg = false;
                }
                // 10になるまでインクリメント
                echo $j . "<br>";
                $j++;
            }
            echo "<br>". '<hr>' . "<br>";



            $file = 'sample_text.txt';
            $fp = fopen($file, 'r');
            $flg = true;
            while($flg === true){
                $res = fgets($fp);
                if($res === false){
                    $flg = false;
                }
                echo $res;
            }
            fclose($fp);
            echo "<br>". '<hr>' . "<br>";


            foreach($excel_arr as $member_data){
                if($member_data['age'] >= 30){
                    echo "{$member_data['family_name']}さんは30代です<br>";
                }else if($member_data['age'] >= 20){
                    echo "{$member_data['family_name']}さんは20代です<br>";
                }else{
                    echo "{$member_data['family_name']}さんは10代です<br>";
                }
            }
            echo "<br>". '<hr>' . "<br>";

            echo '<table border="1px">';
            echo "<tr>";
            echo "<td>family_name</td>";
            echo "<td>first_name</td>";
            echo "<td>pref</td>";
            echo "<td>age</td>";
            echo "<td>language</td>";
            echo "</tr>";
            foreach($excel_arr as $member){
                echo "<tr>";
                echo "<td>" . $member['family_name'] . "</td>";
                echo "<td>" . $member['first_name'] . "</td>";
                echo "<td>" . $member['pref'] . "</td>";
                echo "<td>" . $member['age'] . "</td>";
                echo "<td>" . $member['language'] . "</td>";
                echo "</tr>";
            }
            echo '</table>';

            echo "<br>". '<hr>' . "<br>";

         ?>
    </body>
</html>
