<html>
<head>
	<meta charset="utf-8"> 
	<title> Plataforma - Login </title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div id="corpo-form">
		<h1>Entrar</h1>
		<form method="POST" method="POST" action="verificaLogin.php">
			<input type="email" name="email" placeholder="E-mail: ">
			<input type="password" name="senha" placeholder="Senha: ">
			<input  type="submit" value="Login">
			<a href="cadastrar.php"> Ainda não é inscrito? <strong>Cadastre-se!</strong></a>
		</form>
	</div>
</body>
</html>