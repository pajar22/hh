<html>
<head><title>Buku Tamu</title>
</head>

<body>
<?php
//peroleh variabel URL
$nama=$_GET["nama"];
$pilihan=$_GET["pilihan"];

//simpan
$pegangan=fopen("BUKUTAMU.DAT","a");
fputs($pegangan,$nama."\n");
fputs($pegangan,$pilihan."\n");
fclose($pegangan);

echo("Halo, $nama. TerimaKasih Telah Berpartisipasi....<BR>\n");

?>

</body>
</html>