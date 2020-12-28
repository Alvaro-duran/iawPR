<html>
	<head>
		<title>
			Intranet
		</title>
	</head>
	<body>
		<?php
			//Recoger los parámetros que envían por POST
			$login=$_POST["login"];
			$pass=$_POST["pass"];

			echo "Los parámetros que nos pasan son:";
			echo "<br/>";
			echo $login;
			echo "<br/>";
			echo $pass;
		?>

	</body>
</html>