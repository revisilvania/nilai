<?php
if (isset($_GET['id'])) {
    include "config.php";
    $id = $_GET['id'];

    $sql = "DELETE from siswa WHERE id='$id'";
    $simpan = mysqli_query($con, $sql);
    if ($simpan) {
        header('location:index.php?m=siswa&s=tampil');
        // echo "berhasil";
    } else {
        include "index.php?m=siswa&s=tampil";
        echo '<script languange=JavaScript">';
        echo 'alert("Data Gagal Di hapus.")';
        echo '</script>';
    }
} else {
    '<script>Window.history.back() </script>';
}
