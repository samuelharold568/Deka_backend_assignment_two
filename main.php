<?php
// Create database connection using config file
include_once("config.php");

 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM siswa ORDER BY id DESC");
// var_dump($result);
// exit;
// echo "ini inde.php";
?>
 
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link href="index.css" rel="stylesheet">
  <link href="output.css" rel="stylesheet">
</head>
 
<body class="index-body-container h-screen">
  <header class="h-1/5 add-header">
    <nav class="nav-container">
      <a class="underline" href="add.php">Add New User</a><br/><br/>
    </nav>
    <div class="index-title">
      <h1 class="text-3xl font-bold underline">Daftar calon siswa</h1>
    </div>
  </header>
  <main class="index-main-container">
    <table class="index-table-container" width='80%'>
      <tr class="bg-slate-600 th-line">
        <th>nama</th>
        <th>jurusan</th>
        <th>kelas</th>
        <th>alamat</th>
        <th>jenis kelamin</th>
        <th>Tanggal lahir</th>
      </tr>
    <?php  
     while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['no_pendaftaran']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jurusan']."</td>";
        echo "<td>".$user_data['kelas']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['gender']."</td>";
        echo "<td>".$user_data['tanggal_lahir']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
  </main>
</body>
</html>