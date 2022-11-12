<!DOCTYPE html>
<html>
<head>
	<title>Keaktifan 3</title>
</head>
<body>
<h2>Perulangan While</h2>
<form action="soal3.php" method="post">
Masukan Bilangan : <input type="text" name="nilai">
<input type="submit" name="submit" value="proses">
</form>


<?php 
if (isset($_POST['submit'])) {
	$nilai=$_POST['nilai'];
	$i=1;

	echo "<b>Hasil : </b><br>";
	while ( $i<=$nilai ) {

		if ($i%2==0) {
		$bil="<font color='green'>Bilangan Genap</font>";
	}else{
		$bil="<font color='blue'>Bilangan Ganjil</font>";
	}

 		echo "<b>$i = $bil</b><br>";
 		$i++;
 	} 
}

 ?>
</body>
</html>