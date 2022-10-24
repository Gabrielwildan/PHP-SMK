<?php

    // operator matematika

    $a = 69;
    $b = 42;

    $c = $a + $b;
    echo $c."<br>";

    $c = $a - $b;
    echo $c."<br>";

    $c = $a * $b;
    echo $c."<br>";

    $c = $a / $b;
    echo round ($c)."<br>";

    $c = $a % $b;
    echo $c."<br>";

    // operator logika

    $c = $a < $b;
    echo $c."<br>";

    $c = $a > $b;
    echo $c."<br>";

    $c = $a == $b;
    echo $c."<br>";

    $c = $a != $b;
    echo $c."<br>";

    // incerment

    $a++;
    echo $a."<br>";

    // operator string

    $ugly = " ugly ";
    $bastard = " bastard ";

    $result = $ugly . $bastard;
    $result.="enjoyer";
    echo $result;
?>