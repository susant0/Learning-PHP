<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
for ($x=1; $x <=5 ; $x++) { 
	if ($x==3) {
		exit();
	}
	echo "nilai x : ".$x."<br>";
}
// statmen dibawah ini tidak akan dijalankan
echo "Universitas AMIKOM Yogyakarta";
echo "Creative Economy Park";
 ?>
</body>
</html>