<?php
include_once("config.php");

if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $kelas=$_POST['kelas'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $jurusan=$_POST['jurusan'];

    $result = mysqli_query($mysqli, "UPDATE siswa SET nama='$name',jurusan='$jurusan',kelas='$kelas', alamat='$alamat', gender='$gender', tanggal_lahir='$tanggal_lahir' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM siswa WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['name'];
    $jurusan = $user_data['jurusan'];
    $kelas = $user_data['kelas'];
    $alamat = $user_data['alamat'];
    $gender = $user_data['gender'];
    $tanggal_lahir = $user_data['tanggal_lahir'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>jurusan</td>
                <td><input type="text" name="jurusan" value=<?php echo $jurusan;?>></td>
            </tr>
            <tr> 
                <td>kelas</td>
                <td><input type="text" name="kelas" value=<?php echo $kelas;?>></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>jenis kelamin</td>
                <td><input type="text" name="gender" value=<?php echo $gender;?>></td>
            </tr>
            <tr> 
                <td>tanggal lahir</td>
                <td><input type="text" name="tanggal_lahir" value=<?php echo $tanggal_lahir;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>