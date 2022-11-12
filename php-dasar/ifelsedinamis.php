<!DOCTYPE html>
<html>
<head>
	<title>striktur kendali if else</title>
</head>
<body>
<form method="post" action="ifelsedinamis.php">
	masukan nilai= <input type="text" name="nilai"><br>
	<input type="submit" name="oke" value="kirim">
</form>
<?php 
if(isset($_POST['oke'])){
	$nilai=$_POST['nilai'];
	if (>=60) {
		echo "nilai anda $nilai, anda LULUS";
	}else{
		echo "nilai anda $nilai, anda GAGAL";
	}
}
 ?>

</body>
</html>