<html>
<head>
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    <form action="tambah.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>Nim</td>
            <td><input type="text" name="NIM"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
            <tr>
            <td>Gender (L/P)</td>
            <td><input type="text" name="J_kel"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat"></td>
        </tr>
        <tr>
            <td>Tgl Lahir</td>
            <td><input type="text" name="tgl_lahir"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Tambah"></td>
        </tr>
    </table>
    </form>
    <?php
        // Check If form submitted, insert form data into users table.
        if(isset($_POST['Submit'])) {
            $NIM = $_POST['NIM'];
            $nama = $_POST['nama'];
            $J_kel = $_POST['J_kel'];
            $Alamat = $_POST['Alamat'];
            $tgl_lahir = $_POST['tgl_lahir'];
            // include database connection file
            include_once("koneksi.php");
            // Insert user data into table
            $result = mysqli_query($con, "INSERT INTO mahasiswa(NIM,nama,J_kel,Alamat,tgl_lahir)
            VALUES('$NIM','$nama', '$J_kel','$Alamat','$tgl_lahir')");

            echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
        }
    ?>
</body>
</html>