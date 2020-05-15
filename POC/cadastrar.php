<html>
<head>
	<meta charset="utf-8"> <!-- entender os sinais em pt br -->
	<title> Plataforma - Cadastro </title>
	<link rel="stylesheet" type="text/css" href="css/login.css"> <!-- conctar o css -->
</head>
<body>
	<div id="corpo-form-cad">
		<h1> Cadastrar </h1>
		<form method="POST" method="POST" action="cadastrarUsuario.php" required> <!-- post pq é mais seguro que o get para a senha -->
			<input type="text" name="nome" placeholder="Nome:" maxlength="30" required>
			<input type="email" name="email" placeholder="E-mail:" maxlength="40" required>
			<input type="password" name="senha" placeholder="Senha:" minlength="8" required>
			<input type="submit" value="Cadastrar">
		</form>
	</div>
</body>
</html>