<!DOCTYPE html>
<html>
<head>
	<title>Keaktifan 1</title>
</head>
<body>
<h1>Struktur Kendali If ElseIf</h1>
<form method="post" action="soal1.php">
	Masukan Nilai Anda : <input type="text" name="nilai">
	<input type="submit" name="submit" value="proses">
</form>



<?php 
if (isset($_POST['submit'])) {
	if ($_POST['nilai']>80) {
		$range="A";
	}elseif ($_POST['nilai']>=65) {
		$range="B";
	}elseif ($_POST['nilai']>=35) {
		$range="C";
	}elseif ($_POST['nilai']>=15) {
		$range="D";
	}else{
		$range="E";
	}

	echo "<font color='blue'><b>Hasil : </b><br><br></font>";
	echo "<font color='red'>Nilai anda adalah : $_POST[nilai]</font><br>";
	echo "<font color='green'>Dengan Index : $range</font>";
}
 ?>
</body>
</html>