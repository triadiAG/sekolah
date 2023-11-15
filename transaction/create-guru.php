<?php
  include_once '../db/koneksi.php';

  $nama = $_POST["nama_guru"];

  $query = "INSERT INTO guru VALUES('','$nama')";
  // echo $query;
  $result = mysqli_query($mysqli,$query);
  if ($result) {
    header('location:../page/guru.php');
  }
?>