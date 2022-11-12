<!DOCTYPE html>
<html>
<head>
	<title>Keaktifan 2</title>
</head>
<body>
<h1>Masukan Angka : </h1>
<form method="post" action="soal2.php">
	Angka : <input type="text" name="nilai1">
	<select name="metode">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="x">x</option>
		<option value=":">:</option>
		<option value="%">%</option>
	</select>
	<input type="text" name="nilai2">
	<input type="submit" name="submit" value="Hitung">
</form>
<?php 
if (isset($_POST['submit'])) {
	$nilai1=$_POST['nilai1'];
	$nilai2=$_POST['nilai2'];
	$metode=$_POST['metode'];

	if ($metode=="+") {
		$hitung=$nilai1+$nilai2;
	}elseif ($metode=="-") {
		$hitung=$nilai1-$nilai2;
	}elseif ($metode=="x") {
		$hitung=$nilai1*$nilai2;
	}elseif ($metode==":") {
		$hitung=$nilai1/$nilai2;
	}else{
		$hitung=$nilai1%$nilai2;
	}
	echo "<b>Hasil Perhitungan :</b><br>";
	echo "$nilai1 $metode $nilai2 = $hitung";
}
 ?>
</body>
</html>