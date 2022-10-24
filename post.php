<form action="" method="post">
    email:
    <input type="email" name="email">
    password:
    <input type="password" name="password">
    <input type="submit" name="send" value="login">
</form>

<?php

    if (isset($_POST['send'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        
        echo $email;
        echo '<br>';
        echo $password;
        
    }

   
?>