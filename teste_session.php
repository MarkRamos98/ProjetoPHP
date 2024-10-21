<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	</title>
</head>
<body>
	<?php 

		session_start();

		$_SESSION['nome'] = "Administrador";

		$_SESSION['senha'] = "1234";

		
		//session_unset();

		//session_destroy();


	 ?>

	 <h3>Sessão Usuário</h3>
	 Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>

	 Sid desta sessão é: <?php echo session_id(); ?>

</body>
</html>