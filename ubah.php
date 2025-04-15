<?php
include "koneksi.php";
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM todo where id = $id";
      $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ubah data</title>
</head>
<body>
<fieldset>
      <legend>Input todo</legend>
        <form action="update.php" method="post">
        <table>
          <tr>
            <td>Task</td>
            <td>:</td>
            <td><input type="text" name="title" id="title" value="<?= $row['title']; ?>"></td>
          </tr>
          <tr>
            <td>Dimulai</td>
            <td>:</td>
            <td><input type="date" name="created_at" id="created_at" value="<?= $row['created_at']; ?>"></td>
          </tr>
          <tr>
            <td>Selesai</td>
            <td>:</td>
            <td><input type="date" name=" Deadline" id="Deadline" value="<?= $row['Deadline']; ?>"></td>
          </tr>
          <tr>
            <td>Complete?</td>
            <td></td>
            <td><input type="checkbox" name="Status" id="Status"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" value="proses" name="proses"></td>
          </tr>
          <input type="text" name="id" id="id" value="<?= $row['id']; ?>">
        </table>
        </form>
    </fieldset>
</body>
</html>