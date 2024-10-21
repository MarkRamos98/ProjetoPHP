<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Verifica sessão</title>

	<?php 

		session_start();

		if ($_SESSION["nome"] != "master of puppets") {

			session_destroy();

			header("location:sessao_bloqueando_paginas.php");

		}

	 ?>

</head>
<body>

	Página ulta-altissmíssima

</body>
</html>