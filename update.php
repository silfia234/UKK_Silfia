<?php
include "koneksi.php";
  if(isset($_POST['proses'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $created_at = $_POST['created_at'];
    $deadline = $_POST['Deadline'];
    $status = $_POST['Status'];
    $status == null ? $status = 0 : $status = 1;
      $query = "UPDATE todo SET title = '$title', created_at = '$created_at', Deadline = '$deadline', Status = '$status' WHERE id = $id";
        $result = mysqli_query($conn, $query);
         if($result){
            echo "<script>alert('Data berhasil diubah'); window.location = 'dasbor.php';</script>";
         }
  }
?>
