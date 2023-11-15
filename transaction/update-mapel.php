<?php
  include_once '../db/koneksi.php';

  $id = $_POST["id"];
  $nama = $_POST["nama_mapel"];

  $query = "UPDATE mata_pelajaran SET nama_mapel='$nama' WHERE id='$id';";
  $result = mysqli_query($mysqli,$query);
  if ($result) {
    header('location:../page/mapel.php');
  }
?>