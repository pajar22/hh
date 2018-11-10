<html>
<head>
<title>Baca Tamu</title>
</head>
<body>
<?php
$no_data=1;
$pegangan=fopen("BUKUTAMU.DAT","r");
while(!feof($pegangan))
{
  $nama = fgets($pegangan,255);
if($nama == FALSE)
break;
$brg = trim(fgets($pegangan,255));
$jml = trim(fgets($pegangan,255));

print("<B>Data ke-$no_data:</B><BR>\n");
printf("Nama :%s<BR>\n",$nama);
printf("Barang :%s<BR>\n",$brg);
printf("Jumlah :%s<BR>\n",$jml);
print("<BR>\n");
$no_data++;
}
?>
</BODY>
</HTML>
