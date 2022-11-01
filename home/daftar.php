<?php
    ob_start();
?>

<h3>Registration</h3>

<div class="form-group">
    <form action="" method='post'>
        <div class="form-group w-50">
            <label for="">Pelanggan</label>
            <input type="text" name="pelanggan" required placeholder="insert pelanggan" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="">Alamat</label>
            <input type="text" name="alamat" required placeholder="insert alamat" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="">Telp</label>
            <input type="text" name="telp" required placeholder="insert telp" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="">Email</label>
            <input type="email" name="email" required placeholder="insert password" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="">Password</label>
            <input type="password" name="password" required placeholder="insert password" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="">Confirm Password</label>
            <input type="password" name="confirm" required placeholder="confirm password" class="form-control">
        </div>
        
        <div>
            <input type="submit" name="save" value="save"  class="btn btn-primary">
        </div>
    </form>
</div>

<?php

    if (isset($_POST['save'])) {
        $pelanggan = $_POST['pelanggan'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];

        if ($password === $confirm) {
            $sql = "INSERT INTO tblpelanggan VALUES ('','$pelanggan','$alamat','$telp','$email','$password',1)";
            // echo $sql;
            $db->runSQL($sql);
            header("location:?f=home&m=info");
        }else {
            echo '<h2> Incorrect Password </h2>';
        }
    }

?>