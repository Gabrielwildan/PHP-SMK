<?php

// $nama = array("joni","fahri","farhan","dimas","6969");
// var_dump ($nama);
// echo "<br>";

// foreach ($nama as $key) {
//     echo $key."<br>";
// }


$nama = array(
    "joni" => "indomie",
    "fahri" => "cilok",
    "farhan" => "kebab",
    "dimas" => "peju"
);
// var_dump($nama);

echo "<br>";

foreach ($nama as $key => $value) {
    echo $key.'-'.$value;
    echo"<br>";
}


?>