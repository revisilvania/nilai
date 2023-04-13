<?php
if (isset($_POST['simpan'])){
    include "config.php";
$jurusan = $_POST['jurusan'];
$kapasitas = $_POST['kapasitas'];
$terisi = $_POST['terisi'];

$sql = "INSERT INTO jurusan SET jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi'";
$simpan = mysqli_query($con, $sql);
if ($simpan) {
header('location:index.php?m=jurusan&s=tampil');
// echo "berhasil";
} else {
    include "index.php?m=jurusan&s=tampil";
    echo '<script languange=JavaScript">';
    echo 'alert("Data Gagal Ditambahkan.")';
    echo '</script>';
}
} else {
    '<script>Window.history.back() </script>';
}
