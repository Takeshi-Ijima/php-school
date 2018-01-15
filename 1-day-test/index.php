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

    <tabel border="1px">
        <tr>
            <td>name</td>
            <td>age</td>
            <td>pref</td>
            <td>sex</td>
            <td>language</td>
        </tr>


    echo "</table>";

    echo "<br><hr><br>";

    /*
        問 2-1
    */

    echo "<br><hr><br>";

    /*
        問 2-2
    */

    echo "<br><hr><br>";

    /*
        問 2-3
    */

    echo "<br><hr><br>";
