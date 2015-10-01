<!DOCTYPE html>
<html>
	<head>
		<title>E64</title>
	</head>
	<body>
		<h1><u>Numero aleatorio entre 100 y 200, ambos inclusive</u></h1>
			<?php
			$minimo = 100;
			$maximo = 200;
			$min_max = mt_rand($minimo,$maximo);
			printf($min_max);
			?>
	</body>
</html>