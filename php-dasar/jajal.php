<!DOCTYPE html>
<html>
<head>
	<title>no 2</title>
</head>
<body>

<form action=""  method="post">
	<font><h3>Masukkan angka :</h1></font>
	<br/>
	Angka1<input type="text" name="angka1">
	<select name="oprt" >
		<option value="tambah">+</option>
		<option value="kurang">-</option>
		<option value="kali">x</option>
		<option value="bagi">/</option>
		<option value="mod">%</option>
	</select>
	Angka2<input type="text" name="angka2">
	<input type="submit" name="hitung" value="Hitung">

<?php
		
if(isset($_POST['hitung'])){
	if (($_POST['angka1']==0)||is_string($_POST['angka2'])==0) {
		echo "<br/>diisi angka dulu john!";
		exit;
	}

	$a=$_POST['angka1'];
	$b=$_POST['angka2'];
	$op=$_POST['oprt'];
	$penambahan=$a+$b;
	$pengurangan=$a-$b;
	$perkalian=$a*$b;
	$pembagian=$a/$b;
	$modulus=$a%$b;

	if ($op=='tambah') {

	echo "<br/> Hasil perhitungan: <br/> $a + $b =$penambahan";
	}
	elseif ($op=='kurang') {
	echo "<br/> Hasil perhitungan: <br/> $a - $b =$pengurangan";	
	}
	elseif ($op=='kali') {
	echo "<br/> Hasil perhitungan: <br/> $a x $b =$perkalian";	
	}
	elseif ($op=='bagi') {
	echo "<br/> Hasil perhitungan: <br/> $a / $b =$pembagian";	
	}
	elseif ($op=='mod') {
	echo "<br/> Hasil perhitungan: <br/> $a % $b =$modulus";	
	}


}
	?>
</body>
</html>
