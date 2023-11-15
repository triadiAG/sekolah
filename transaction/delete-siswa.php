<?php
  include_once '../db/koneksi.php';

  $id = $_GET["id"];

  $query = "DELETE FROM siswa WHERE id='$id';";
  $result = mysqli_query($mysqli,$query);
  if ($result) {
    header('location:../page/siswa.php');
  }
?>