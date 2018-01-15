<?php
    define('TAX', 1.08);
    say_hello('matsumoto');
    say_hello('tanaka');
    say_hello('watanabe');
    say_hello('katou');

    say_hello2();
    say_hello2('kazuma');

    say_hello3('matsumoto', 34);
    $price = 1000;
    echo $price . "<br>";

    $price2 = calc($price);
    echo calc($price) . "<br>";

    function say_hello($name){
        echo "hi {$name}<br>";
        echo "your name is {$name}<br>";
    }

    function say_hello2($name = 'hoge'){
        echo "hi {$name}<br>";
        echo "your name is : {$name}<br>";
    }

    function say_hello3($name, $age){
        echo "{$name} is {$age} your old<br>";
    }
    function say_eweather($fine_flg){

    }
    function calc($price){
        $price = 1.2 * $price;
        $price2 = $price * TAX;
        return $price2;
    }
