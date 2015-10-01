	<!DOCTYPE html>
<html>
	<head>
		<title>E76</title>
	</head>
		<body>
			<b><u>Numero aleatorio entre 100 y 200, ambos inclusive</u></b>
				<br>
					<h1>
				<?php
				$minimo = 100;
				$maximo = 200;
				$min_max = mt_rand($minimo,$maximo);
				printf($min_max);
				printf(gettype($min_max))
				?>
				</h1>
		</body>
</html>