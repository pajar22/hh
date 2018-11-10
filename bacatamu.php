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
$pilihan = trim(fgets($pegangan,255));

print("<B>Data ke-$no_data:</B><BR>\n");
printf("Nama :%s<BR>\n",$nama);
printf("PILIHAN : %s <br>\n",$pilihan == "L" ? "Lutfi Dengan KOmar" : "Tika Dengan Ali");
print("<BR>\n");
$no_data++;//Pencacah nomor urut data
}
?>
</BODY>
</HTML>
