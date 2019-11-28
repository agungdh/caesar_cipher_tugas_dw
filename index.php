<?php
require 'vendor/autoload.php';

use agungdh\Pustaka;

$enkata = '';
$engeser = 3;
$enhasil = '';

$dekata = '';
$degeser = 3;
$dehasil = '';

if (count($_POST) > 0) {
	$enkata = $_POST['enkata'];
	$engeser = $_POST['engeser'];
	$enhasil = $_POST['enhasil'];

	$dekata = $_POST['dekata'];
	$degeser = $_POST['degeser'];
	$dehasil = $_POST['dehasil'];

	$enhasil = Pustaka::caesarencrypt($enkata, $engeser);
	$dehasil = Pustaka::caesardecrypt($dekata, $degeser);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Caesar Cipher</title>
</head>
<body>
	<h3>Caesar Cipher</h3>
	<form action="" method="post">

		<hr>

		<h4>Enkrip</h4>

		<label>Kata Kata</label>
		<input type="text" name="enkata" value="<?php echo $enkata; ?>">
		<br>

		<label>Digeser berapa kali</label>
		<input type="number" min="1" name="engeser" value="<?php echo $engeser; ?>">
		<br>

		<label>Hasil</label>
		<input type="text" readonly name="enhasil" value="<?php echo $enhasil; ?>">
		<br>

		<input type="submit" value="Enkrip">

		<hr>

		<h4>Dekrip</h4>

		<label>Kata Kata</label>
		<input type="text" name="dekata" value="<?php echo $dekata; ?>">
		<br>

		<label>Digeser berapa kali</label>
		<input type="number" min="1" name="degeser" value="<?php echo $degeser; ?>">
		<br>

		<label>Hasil</label>
		<input type="text" readonly name="dehasil" value="<?php echo $dehasil; ?>">
		<br>

		<input type="submit" value="Dekrip">

	</form>
</body>
</html>