	<!DOCTYPE html>
<html>
	<head>
		<title>E75</title>
	</head>
		<link rel="stylesheet" type="text/css" href="e75.css">
		<body>
			<b><u>Numero aleatorio entre 0 y 100, ambos inclusive</u></b>
				<br>
					<input name="numero" readonly="readonly" class="fields" size="1" value=" <?php
					$min_max = mt_rand(0,100);
					printf($min_max); ?>"
					/>
		</body>
</html>