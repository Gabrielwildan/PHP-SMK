<form action="" method="get">

    name:
    <input type="text" name="name">
    address:
    <input type="text" name="address">

    <input type="submit" name="send" value="save">

</form>

<?php

    if (isset($_GET['send'])) {
        
        $name = $_GET['name'];
        $address = $_GET['address'];

        echo $name;
        echo "<br>";
        echo $address;

    }

?>