<h3>Insert Kategori</h3>

<div class="form-group">
    <form action="" method='post'>
        <div class="form-group w-50">
            <label for="">kategori</label>
            <input type="text" name="kategori" required placeholder="insert" class="form-control">
        </div>
        <div>
            <input type="submit" name="save" value="save"  class="btn btn-primary">
        </div>
    </form>
</div>

<?php

    if (isset($_POST['save'])) {
        $kategori = $_POST['kategori'];

        $sql = "INSERT INTO tblkategori VALUES ('','$kategori')";
        // echo $sql;

        $db->runSQL($sql);

        header("location:?f=kategori&m=select");
    }

?>