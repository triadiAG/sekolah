<?php
  include_once '../db/koneksi.php';

  $nama = $_POST["nama_mapel"];

  $query = "INSERT INTO mata_pelajaran VALUES('','$nama')";
  // echo $query;
  $result = mysqli_query($mysqli,$query);
  if ($result) {
    header('location:../page/mapel.php');
  }
?>