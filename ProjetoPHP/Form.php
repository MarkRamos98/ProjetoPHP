<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<title>Formulário Request</title>
	<link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
</head>
<body>

	<div class="card">

		<div class="card-body">

			<h5 class="card-title">Formulário de login</h5>

			<form action="request.php" method="post">
				
				<label for="login">Login:</label>
				<input type="text" name="Loging" id="Loging" autocomplete="off" required autofocus maxlength="20">

				<label for="senha">Senha:</label>
				<input type="password" name="Senha" id="Senha" autocomplete="off" required maxlength="20">

				<input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">		
				<input type="reset" name="Limpar" value="Limpar" class="btn btn-light">

			</form>

		</div>

	</div>

	









	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>