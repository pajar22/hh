<html>
<head><title>Pesanan</title>
</head>

<body>
<?php
//peroleh variabel URL
$nama=$_GET["nama"];
$Barang=$_GET["brg"];
$Jumlah=$_GET["jml"];

$pegangan=fopen("BUKUTAMU.DAT","a");
fputs($pegangan,$nama."\n");
fputs($pegangan,$brg."\n");
fputs($pegangan,$jml."\n");
fclose($pegangan);

echo("Halo, $nama. TerimaKasih Pesanan Barang Sudah Diterima....<BR>\n");
?>

</body>
</html>
