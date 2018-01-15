<?php

    /*
        問 1-1
    */

    $arr = array(
        'name' => '松本',
        'age' => '33',
        'pref' => '千葉',
        'sex' => '男'
    );
    foreach($arr as $human => $user){
        echo "{$human} : {$user}<br>";
    }

    echo "<br><hr><br>";

    /*
        問 1-2
    */

    $arr['language'] = 'PHP';
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";

    echo "<br><hr><br>";

    /*
        問 1-3
    */
    $user = array(
        array(
            'name' => '田中',
            'age' => '22',
            'pref' => '千葉',
            'sex' => '男',
            'language' => 'C'
        ),
        array(
            'name' => '鈴木',
            'age' => '19',
            'pref' => '東京',
            'sex' => '女',
            'language' => 'Java'
        ),
        array(
            'name' => '吉田',
            'age' => '27',
            'pref' => '神奈川',
            'sex' => '男',
            'language' => 'C++'
        ),
    );
    echo "<pre>";
    var_dump($user);
    echo "</pre>";

    echo "<br><hr><br>";

    /*
        問 1-4
    */

    $watanabe = array(
        'name' => '渡辺',
        'age' => '26',
        'pref' => '大阪',
        'sex' => '男',
        'language' => 'Perl'
    );
    array_push($user, $watanabe);
    echo "<pre>";
    var_dump($user);
    echo "</pre>";


    echo "<br><hr><br>";
    /*
        問 1-5
    */

    echo '<table border="1px">';
    echo "<tr>";
    echo "<td>name</td>";
    echo "<td>age</td>";
    echo "<td>pref</td>";
    echo "<td>sex</td>";
    echo "<td>language</td>";
    echo "</tr>";
    foreach($user as $user_list){
        // 崩れる
        // echo "<td> {$user_list['name']} </td>";
        echo "<tr>";
        echo "<td>" . $user_list['name'] . "</td>";
        echo "<td>" . $user_list['age'] . "</td>";
        echo "<td>" . $user_list['pref'] . "</td>";
        echo "<td>" . $user_list['sex'] . "</td>";
        echo "<td>" . $user_list['language'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br><hr><br>";


    /*
        問 2-1
    */
    $shop = array(
        array(
            'code' => 'A0001',
            'product' => '白菜（1玉）',
            'price' => '298',
        ),
        array(
            'code' => 'K0001',
            'product' => 'いわし(5尾)',
            'price' => '240',
        ),
        array(
            'code' => 'A0002',
            'product' => '九条葱(1パック)',
            'price' => '258',
        ),
        array(
            'code' => 'A0003',
            'product' => 'サツマイモ(1袋)',
            'price' => '180',
        ),
        array(
            'code' => 'K0002',
            'product' => 'きびなご(1皿)',
            'price' => '180',
        ),
    );
    echo "<pre>";
    var_dump($shop);
    echo "</pre>";
    echo "<br><hr><br>";

    /*
        問 2-2
    */
    echo '<table border="1px">';
    echo "<tr>";
    echo "<td>code</td>";
    echo "<td>product</td>";
    echo "<td>price</td>";
    echo "</tr>";
    foreach($shop as $product_list){
        echo "<tr>";
        echo "<td>" . $product_list['code'] . "</td>";
        echo "<td>" . $product_list['product'] . "</td>";
        echo "<td>" . $product_list['price'] . "</td>";
        echo "<tr>";
    }
    echo "</table>";
    echo "<br><hr><br>";


    /*
        問 2-3
    */

    $buy_count = count($shop);
    foreach($shop as $all_price){
        $buy_sum += $all_price['price'];
    }
    echo "以上『<strong>{$buy_count}</strong>』点の商品で合計『<strong>{$buy_sum}</strong>円』になります";
    echo "<br><hr><br>";




    /*
        問 3
    */
        $user = array(
            array(
                'name' => '山田',
                'age' => '19',
                'sex' => '1',
            ),
            array(
                'name' => '鈴木',
                'age' => '22',
                'sex' => '0',
            ),
            array(
                'name' => '田中',
                'age' => '18',
                'sex' => '1',
            ),
            array(
                'name' => '渡辺',
                'age' => '25',
                'sex' => '0',
            ),
            array(
                'name' => '佐藤',
                'age' => '33',
                'sex' => '1',
            ),
        );

    /*
        問 3-1
    */

    echo '<table border="1px">';
    echo "<tr>";
    echo "<td>名前</td>";
    echo "<td>年齢</td>";
    echo "<td>性別</td>";
    echo "</tr>";
    foreach($user as $user_list){
        echo "<tr>";
        echo "<td>" . $user_list['name'] . "</td>";
        echo "<td>" . $user_list['age'] . "</td>";
        if($user_list['sex'] === '0'){
            echo "<td>女</td>";
        }else{
            echo "<td>男</td>";
        }
        echo "<tr>";
    }
    echo "</table>";
    echo "<br><hr><br>";


    /*
        問 3-2
    */

    foreach($user as $age_check){
        if($age_check['age'] >= '20'){
            echo $age_check['name'] . "さん、飲み過ぎには注意しましょう。" . "<br>";
        }else{
            echo $age_check['name'] . "さんは未成年なのでまだお酒は飲めません。" . "<br>";
        }
    }
    echo "<br><hr><br>";

    /*
        問 3-3
    */

    // foreach($user as $average){
    //     if($average['sex'] === '1'){
    //         $sum = $average['age'];
    //         echo array_values($sum);
    //     }else{
    //
    //     }
    // }

    foreach($user as $average){
        if($average['sex'] === '1'){
            $all_man += count($average['sex']);
            $m_totalage += $average['age'];
            $ave_man_age = $m_totalage / $all_man;
            // round()
        }else{
            $all_woman += count($average['sex']);
            $w_totalage += $average['age'];
            $ave_woman_age = $w_totalage / $all_woman;
        }
    }

    echo "男性メンバー : {$all_man} 人(平均年齢{$ave_man_age}才)<br>";
    echo "女性メンバー : {$all_woman} 人(平均年齢{$ave_woman_age}才)<br>";
    echo "<br><hr><br>";
