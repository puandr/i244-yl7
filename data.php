<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>i244, ülesanne 7-3</title>
	<style>
		p {
			display : inline-block;
			border : 2px solid black;
			margin : 20px;
			width : 250px;
			padding : 5px;			
		}
	</style>
</head>

<body>
	<?php

	$autod = array (
					array('mark' => 'Toyota', 'mudel' =>'Rav4', 'vanus' => '4', 'varvus'=>'valge'),
					array('mark' => 'Honda', 'mudel' =>'C-RV', 'vanus' => '5', 'varvus'=>'pruun'),
					array('mark' => 'Skoda', 'mudel' =>'Kodiaq', 'vanus' => '1', 'varvus'=>'must'),
					array('mark' => 'Subaru', 'mudel' =>'Outlander', 'vanus' => '4', 'varvus'=>'hall'),
					array('mark' => 'Volkswagen', 'mudel' =>'Tiguan', 'vanus' => '3', 'varvus'=>'punane')
	);
?>

<?php
	foreach ($autod as $voti => $vaartus) include("sabloon.html");
?>

</body>

</html>