<html>
<head>
	<title>Program Penjumlahan</title>
<head>

<body>
<H1>Buku Tamu</H1>
<form method='POST' action='tugas1.php'>
<p>Nilai A adalah : <input type='text' name='nilaiA' size='20'></p>
<p>Nilai B adalah : <input type='text' name='nilaiB' size='20'></p>
<input type='submit' value='jumlahkan' name='submit'></p>
</form>

<?php
error_reporting (E_ALL ^ E_NOTICE);
$nilaiA = $_POST['nilaiA'];
$nilaiB = $_POST['nilaiB'];
$jumlah = $nilaiA + $nilaiB;
$submit = $_POST['submit'];
if($submit){
	echo " Nilai A adalah $nilaiA<br>";
	echo " Nilai B adalah $nilaiB<br>";
	echo " jadi nilai A ditambah nilai B adalah $jumlah";
	}
?>
</body>
</html>