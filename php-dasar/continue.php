<!DOCTYPE html>
<html>
<head>
	<title>struktur perpindahan dengan continue</title>
</head>
<body>
<?php 
for ($x=1; $x <=5 ; $x++) { 
	if ($x==3) {
		continue;
	}
	echo "Nilai x : ".$x."<br>";
}
 ?>
</body>
</html>