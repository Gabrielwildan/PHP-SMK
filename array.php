<?php

//array dimensi

// $nama = array('joni indomie','fahri cilok','dimas peju','farhan kebab',69,6.9);

// var_dump($nama);
// echo "<br>"."<br>";

// echo $nama[2];
// echo "<br>"."<br>";

// // for ($i=0; $i < 6; $i++) { 
// //    echo $nama[$i]."<br>";
// // }

// foreach ($nama as $key ) {
//    echo $key."<br>";
// }

//array asosiatif

$nama = array(
    "joni" => "indomie",
    "fahri" => "cilok",
    "dimas" => "peju",
    "farhan" => "kebab"
);
var_dump($nama);
echo "<br>.<br>";

foreach ($nama as $key => $value) {
    echo $key." => ".$value."<br>";
}

?>