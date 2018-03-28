<!DOCTYPE html>
<html>
<head>
	<title>Anti F5</title>
</head>
<body>
	<?php
	if(isset($_POST['nome'])){
		$nome = $_POST['nome'];
		file_put_contents("teste.txt", $nome, FILE_APPEND);
		header("Location: index.php");
	}

	?>

	<form method="POST">
		<input type="text" name="nome" />
		<input type="submit" name="Enviar" />
	</form>
</body>
</html>