<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>i244, ülesanne 7</title>
</head>

<body>

<?php
	$tekst = "Originaalne tekst";
	echo "$tekst <br/>\n";
	$tekstiMassiiv = str_split($tekst);
	for ($i = count($tekstiMassiiv); $i > 0; $i = $i - 1) {
		echo $tekstiMassiiv[$i-1];
	}
?>

</body>

</html>