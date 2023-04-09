<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="index.css">
  <title>Document</title>
</head>
<body>
  <main class="bg-gray-700 w-full h-screen flex justify-center items-center">
  <form class="bg-gray-400 flex flex-col w-3/5 h-4/5" action="add.php" method="post" name="form1">
      <table class="h-full w-full" border="0">
        <tbody class="h-full w-full flex flex-col justify-around items-center">
          <tr> 
            <td>
              <label for="nama">Nama</label>
              <input id="nama" type="text" name="nama">
            </td>
          </tr>
          <tr>
            <td class="first">
              <label for="study">Jurusan</label>
              <select id="study" name="jurusan">
                <option value="multimedia">multimedia</option>
                <option value="tkj">TKJ</option>
                <option value="rpl">RPL</option>
                <option value="akutansi">Akutansi</option>
              </select> 
            </td>
            <td class="second">
              <label for="kelas">kelas</label>
              <select id="kelas" name="kelas">
                <option value="sepuluh">10</option>
                <option value="sebelas">11</option>
                <option value="duabelas">12</option>
              </select> 
            </td>
          </tr>
          <tr class="flex justify-between"> 
            <td class="flex flex-row items-center gap-4">
              <label for="laki">l</label>
              <input id="laki" type="radio" name="gender" value="laki">
            </td>
            <td class="flex flex-row items-center gap-4">
              <label for="perempuan">p</label>
              <input id="perempuan" type="radio" name="gender" value="perempuan">
            <td>
          </tr>
          <tr> 
            <td>
              <label for="tanggal_lahir">Tanggal lahir</label>
               <input id="tanggal_lahir" type="date" name="tanggal_lahir">
            </td>
          </tr>
          <tr>
            <td>
              <label for="alamat">alamat</label>
              <textarea id="alamat" name="alamat">
              </textarea> 
            </td>
          </tr>
        </tbody>
      </table>
      <button type='Submit' name='submit' value="add" class="bg-gray-900 text-white w-full">Send</button>
    </form>
    <?php

    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];
        $gender = $_POST['gender'];
        $tanggal_lahir = $_POST['tanggal_lahir'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO siswa(nama, jurusan, kelas, alamat, gender, tanggal_lahir) VALUES('$nama', '$jurusan', '$kelas', '$alamat', '$gender', '$tanggal_lahir')");
    }
    ?>
  </main>
</body>
</html>