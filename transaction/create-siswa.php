<?php
  include_once '../db/koneksi.php';

  $nama = $_POST["nama_siswa"];
  $kelas = $_POST["kelas"];
  $jurusan = $_POST["jurusan"];

  $query = "INSERT INTO siswa VALUES('','$nama','$kelas', '$jurusan')";
  // echo $query;
  $result = mysqli_query($mysqli,$query);
  if ($result) {
    header('location:../page/siswa.php');
  }
?>