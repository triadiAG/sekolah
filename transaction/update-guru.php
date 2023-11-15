<?php
  include_once '../db/koneksi.php';

  $id = $_POST["id"];
  $nama = $_POST["nama_guru"];

  $query = "UPDATE guru SET nama_guru='$nama' WHERE id='$id';";
  $result = mysqli_query($mysqli,$query);
  if ($result) {
    header('location:../page/guru.php');
  }
?>