<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
echo "<form  method='get' action='ifelseifdinamis.php'>
	masukan kode prodi : <input type='text' name='prodi'>
	<input type='submit' name='submit' value='kirim'>
</form>";

if (isset($_GET['submit'])) {
	if ($_GET['prodi']=="TK") {
		echo "Teknik Komputer";
	}elseif ($_GET['prodi']=="MI") {
		echo "Manajemen Informatika";
	}elseif ($_GET['prodi']=="SI") {
		echo "Sistem Informasi";
	}elseif ($_GET['prodi'])=="TI" {
		echo "Teknik Informatika";
	}else{
		echo "Prodi $_GET[prodi] tidak terdaftar";
	}
}
 ?>
</body>
</html>