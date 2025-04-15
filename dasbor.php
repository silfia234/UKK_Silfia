<?php 
include "koneksi.php"; ?>
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dasbor</title>
  <style>
    body {
      margin: 50px auto;
      float: none;
      display: table;
    }
    .header {
      position: relative;
      margin-top:10px;
      width: 600px;
      height: 50px;
      /* border: 1px solid black; */
      line-height:50px;
      text-align: center;
      font-family: comic sans ms;
      background-color: #eaeaea;
    }
  </style>
</head>
<body>
  <a href="logout.php">Logout</a>
  <div class="header">
   SELAMAT DATANG DI MY TODOLIST
  </div>
    <fieldset>
      <legend>Input todo</legend>
        <form action="tambah.php" method="post">
        <table>
          <tr>
            <td>Task</td>
            <td>:</td>
            <td><input type="text" name="title" id="title"></td>
          </tr>
          <tr>
            <td>Sub Task</td>
            <td>:</td>
            <td><input type="text" name="description" id="description"></td>
          </tr>
          <tr>
            <td>Dimulai</td>
            <td>:</td>
            <td><input type="date" name="created_at" id="created_at"></td>
          </tr>
          <tr>
            <td>Selesai</td>
            <td>:</td>
            <td><input type="date" name="Deadline" id="Deadline"></td>
          </tr>
          <!-- <tr>
            <td>Status</td>
            <td>:</td>
            <td></td>
          </tr> -->
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" value="proses" name="proses"></td>
          </tr>
        </table>
        </form>
    </fieldset>

    <fieldset>
      <legend>List Tugas</legend>
      <table border="1" style="border-collapse:collapse" cellspacing="100" cellpadding="10" >
        <tr>
          <th>No</th>
          <th>Task</th>
          <th>Start Date</th>
          <th>Deadline</th>
          <th>Status</th>
          <th>Hapus</th>
          <th>Ubah</th>
        </tr>
    
      <?php
      if(isset($_SESSION['admin'])){
        $query = "SELECT * FROM todo";
         $result = mysqli_query($conn, $query);
         $loop = 1;
          while($row = mysqli_fetch_assoc($result)){?>
          <tr>
            <td><?= $loop++ ?></td>
            <td><?= $row['title'] ?></td>
            <td><?= date('d-m-Y', strtotime($row['created_at'])) ?></td>
            <td><?= date('d-m-Y', strtotime($row['Deadline'])) ?></td>
            <td><?= ($row['Status'] ==0)? "Belum Selesai" : "Selesai"?></td>

            <td><a href="hapus.php?id=<?= $row['id'] ?>">Hapus <?= $row['id'] ?></a></td>
            <td><a href="ubah.php?id=<?= $row['id'] ?>">Ubah <?= $row['id'] ?></a></td>
          </tr>
      <?php 
           }
      } else {
        echo "<b>Anda tidak dapat akses halaman ini tanpa login, silahkan login kembali</b>";
      } 
      ?>
      </table>
    </fieldset>

</body>
</html>