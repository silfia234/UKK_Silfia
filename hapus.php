<?php
include "koneksi.php";
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM todo where id = $id";
    $result = mysqli_query($conn, $query);
      if($result){
        echo "<script>alert('Data berhasil dihapus'); window.location = 'dasbor.php';</script>";
      }
  }
?>