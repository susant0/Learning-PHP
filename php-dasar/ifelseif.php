<!DOCTYPE html>
<html>
<head>
	<title>struktur kendali if elseif</title>
</head>
<body>
<?php 
$prodi="TI";
if ($prodi=="TK") {
	echo "Teknik Komputer";
}elseif ($prodi=="MI") {
	echo "Manajemen Informatika";
}elseif ($prodi=="SI") {
	echo "Sistem Informasi";
}elseif ($prodi=="TI") {
	echo "Teknik Informatika";
}else{
	echo "prodi $prodi tidak terdaftar";
}
 ?>

</body>
</html>