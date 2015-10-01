<!DOCTYPE html>
<html>
	<head>
		<title>E63</title>
	</head>
	<body>
		<h1><u>Numero aleatorio entre 100 y 200, ambos inclusive</u></h1>
			<?php
			$minimo = 100;
			$maximo = 200;
			printf(mt_rand($minimo,$maximo));
			?>
	</body>
</html>