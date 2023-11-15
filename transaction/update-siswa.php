<?php
  include_once '../db/koneksi.php';

  $id = $_POST["id"];
  $nama = $_POST["nama_siswa"];
  $kelas = $_POST["kelas"];
  $jurusan = $_POST["jurusan"];

  $query = "UPDATE siswa SET nama_siswa='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id='$id';";
  $result = mysqli_query($mysqli,$query);
  if ($result) {
    header('location:../page/siswa.php');
  }
?>