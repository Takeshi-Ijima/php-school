<?php
    $var = 1;
    $var2 = '1';
    $name = "斎藤";
    var_dump($var);
    var_dump($var2);
    // strign バイト
    var_dump($name);
    echo "<br>";

    $arr = array(
        'saito',
        'tomoki',
        'chiba',
        'PHP'
    );
    // $arr2 = [
    //     'saito',
    //     'tomoki',
    //     'chiba',
    //     'PHP'
    // ];
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";


    echo "<br>";
    echo "<br>";

    echo "$arr[0]<br>";
    echo "$arr[1]<br>";

    echo "<br>";
    echo "<br>";
    $arr[4] = 'man';

    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
    echo "<br>";
    echo "<br>";

    $arr[2] = 'tokyo';
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    $label_arr = array(
        'family_name' => 'saito',
        'first_name' => 'tomoki',
        'pref' => 'chiba',
        'language' => 'PHP',
    );
    // $label_arr = array[
    //     'family_name' => 'saito',
    //     'first_name' => 'tomoki',
    //     'pref' => 'chiba',
    //     'language' => 'PHP',
    // ];

    echo "<pre>";
    var_dump($label_arr);
    echo "</pre>";
    echo "<br>";
    echo "<br>";

    echo $label_arr['language'];
    echo "<br>";
    echo "<br>";

    $label_arr['hobby'] = 'baseball';
    echo "<pre>";
    var_dump($label_arr);
    echo "</pre>";
    echo "<br>";
    echo "<br>";


    $label_arr['language'] = 'Ruby';
    echo "<pre>";
    var_dump($label_arr);
    echo "</pre>";
    echo "<br>";
    echo "<br>";

    $excel_arr = array(
        array(
            'family_name' => 'saito',
            'frist_name' => 'tomohiko',
            'pref' => 'tokyo',
            'language' => 'PHP'
        ),
        array(
            'family_name' => 'tanaka',
            'frist_name' => 'youhei',
            'pref' => 'tokyo',
            'language' => 'C'
        ),
        array(
            'family_name' => 'sato',
            'frist_name' => 'ichiro',
            'pref' => 'kanagawa',
            'language' => 'Java'
        ),
    );
    echo "<pre>";
    var_dump($excel_arr);
    echo "</pre>";
    echo "<br>";
    echo "<br>";


    echo "<pre>";
    var_dump($excel_arr[1]);
    echo "</pre>";
    echo "<br>";
    echo "<br>";


    echo $excel_arr[0]['language'];
    echo "<br>";
    echo "<br>";


    echo $excel_arr[1]['pref'];
    echo "<br>";
    echo "<br>";
    $excel_arr[1]['pref'] = 'osaka';
    echo "<pre>";
    var_dump($excel_arr);
    echo "</pre>";
    echo "<br>";
    echo "<br>";

    $excel_arr[3] = array(
        'familiy_name' => 'suzuki',
        'frist_name' => 'jiro',
        'pref' => 'saitama',
        'language' => 'Perl'
    );
    echo "<pre>";
    var_dump($excel_arr);
    echo "</pre>";
    echo "<br>";
    echo "<br>";

    $arr = array(
        'family_name' => 'suzuki',
        'first_name' => 'jiro',
        'pref' => 'saitama',
        'language' => 'Perl'
    );
    array_push($excel_arr, $arr);
    echo "<pre>";
    var_dump($excel_arr);
    echo "</pre>";
    echo "<br>";
    echo "<br>";



 ?>
