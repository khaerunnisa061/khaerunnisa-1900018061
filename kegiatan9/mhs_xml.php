<?php
include "koneksi.php";
header('Content-Type: text/xml');
$query = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($con,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<mahasiswa>";
 echo"<NIM>",$data['NIM'],"</NIM>";
 echo"<nama>",$data['nama'],"</nama>";
 echo"<J_Kel>",$data['J_kel'],"</J_Kel>";
 echo"<Alamat>",$data['Alamat'],"</Alamat>";
 echo"<tgl_lahir>",$data['tgl_lahir'],"</tgl_lahir>";
 echo "</mahasiswa>";
}
echo "</data>";
?>