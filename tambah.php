<?php
include "koneksi.php";
  if(isset($_POST['proses'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $created_at = $_POST['created_at'];
    $deadline = $_POST['Deadline'];
    // $status = $_POST['Status'];
      $query = "INSERT INTO `todo` ( `title`, `description`, `created_at`, `Deadline`, `Status`) 
                VALUES ('$title','$description', '$created_at', '$deadline', '0')";
        $result = mysqli_query($conn, $query);
         if($result){
            echo "<script>alert('Data berhasil ditambah'); window.location = 'dasbor.php';</script>";
         }
  }
?>