<?php
// include database connection file
include_once("koneksi.php");
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $nim = $_POST['NIM'];
    $nama=$_POST['nama'];
    $jkel=$_POST['J_kel'];
    $alamat=$_POST['Alamat'];
    $tgllhr=$_POST['tgl_lahir'];
    // update user data
    $result = mysqli_query($con, "UPDATE mahasiswa SET
    nama='$nama',J_kel='$J_kel',Alamat='$Alamat',tgl_lahir='$tgl_lahir' WHERE NIM='$NIM'");
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$NIM = $_GET['NIM'];
// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE NIM='$NIM'");
while($user_data = mysqli_fetch_array($result))
{
$NIM = $user_data['NIM'];
$nama = $user_data['nama'];
$J_kel = $user_data['J_kel'];
$Alamat = $user_data['Alamat'];
$tgl_lahir = $user_data['tgl_lahir'];
}
?>
<html>
<head> 
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    <form name="update_mahasiswa" method="post" action="edit.php">
    <table border="0">
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><input type="text" name="J_kel" value=<?php echo $J_kel;?>></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><input type="text" name="Alamat" value=<?php echo $Alamat;?>></td>
    </tr>
    <tr>
        <td>Tgl Lahir</td>
        <td><input type="text" name="tgl_lahir" value=<?php echo $tgl_lahir;?>></td>
    </tr>
    <tr>
        <td><input type="hidden" name="NIM" value=<?php echo $_GET['NIM'];?>></td>
        <td><input type="submit" name="update" value="Update"></td>
    </tr>
    </table>
    </form>
</body>
</html>