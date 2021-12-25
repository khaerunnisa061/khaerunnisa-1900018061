<?php
$url = "https://work123061.000webhostapp.com/getdatamhs.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
 echo "<p>";
 echo "NIM : " . $r->NIM . "<br />";
 echo "Nama : " . $r->nama . "<br />";
 echo "jenis kel : " . $r->J_kel . "<br />";
 echo "Alamat : " . $r->Alamat . "<br />";
 echo "Tgl Lahir : " . $r->tgl_lahir . "<br />";
 echo "</p>";
}
?>