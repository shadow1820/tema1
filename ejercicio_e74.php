<!DOCTYPE html>
<html>
	<head>
		<title>E74</title>
	</head>
		<body>
			<b><u>Numero aleatorio entre 0 y 100, ambos inclusive</u></b>
				<h1>
				<?php
				$minimo = 0;
				$maximo = 100;
				$min_max = mt_rand(0,100);
				printf("%2d,%9b,%4o,%6x",$min_max,$min_max,$min_max,$min_max);
				?>
				</h1>
		</body>
</html>
