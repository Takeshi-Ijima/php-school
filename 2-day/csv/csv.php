<?php

    // CSV , , ,カンマ区切りのファイルのこと

    //
    // 開きたいファイルを取得
    $file = new SplFileObject('read.csv');

    $file->setFlags(SplFileObject::READ_CSV);

    $i = 1;
    $flg = true;
    foreach($file as $line){
        // continue nullがきたら抜けて次の処理にいく
        if($line[0] === null) continue;
        $divDate = explode('-', $line[1]);

        // preg_match 正規表現によるマッチングを行う
        if(preg_match('/^[0-9]{4}$/',trim($line[0])) === 0 || checkdate($divDate[1], $divDate[2], $divDate[0]) === false || preg_match('/^[0-9]$/', $line[2]) === 0){
            echo $i . "erra<br>";
            $flg = false;
        }
        $i++;
    }
    if($flg === true){
        echo "正常に終了しました";
    }
