   <html>
	<head> 
		<title> Jogo Da Velha </title> 
		<link rel="stylesheet" type="text/css" href="css/jogodavelha.css">
		<script type="text/javascript" src="js/jogodavelha.js"></script>
	</head>
	<body> 
		<?php 
			session_start();
			if(empty($_SESSION['id'])){
				header("location:login.php");
			}
		?>
		
		<div id="menu"> 
			<div class="container-items">
				<img src="imgs/super-mario.png" width="50px" height="50px" alt="Logo">
				<p id="titulo-logo"> SUPER JOGO DA VELHA DA IEDINHA E THAISINHA</p>
			</div>

			<div class="container-items">
				<p> Bem-Vindo(a) <?php echo $_SESSION['nome']; ?></p>
				<a href="sair.php"><img src="imgs/emergency-exit.png" title="Sair" id = "imgpos"></a>
			</div>
		</div>
		
		<div id="container">
			<div id="sub-container">
				<div class="fileira"> 
					<div class="field" id="field1" onclick="troca(this)"></div>
					<div class="field" id="field2" onclick="troca(this)"></div>
					<div class="field" id="field3" onclick="troca(this)"></div>
				</div> 
				<div class="fileira"> 
					<div class="field" id="field4" onclick="troca(this)"></div>
					<div class="field" id="field5" onclick="troca(this)"></div>
					<div class="field" id="field6" onclick="troca(this)"></div>
				</div> 
				<div class="fileira"> 
					<div class="field" id="field7" onclick="troca(this)"></div>
					<div class="field" id="field8" onclick="troca(this)"></div>
					<div class="field" id="field9" onclick="troca(this)"></div>
				</div> 
			</div>
			
			<div class="container-items" id="container-items-btns">
				<button id="btn-iniciar-single" class="btn-iniciar" onclick="comecar(0)">Modo SinglePlayer</button>
				<button id="btn-iniciar-multip" class="btn-iniciar" onclick="comecar(1)">Modo MultiPlayer</button>
			</div>
			<div id="desfecho"><p id="desfecho-p"></p><button id="btn-novamente" onclick="recomecar()">Recomeçar</button></div>
		</div>
		<!-- <button id="btn-iniciar-single" class="btn-iniciar" onclick="comecar()">Modo SinglePlayer</button>
		<button id="btn-iniciar-multip" class="btn-iniciar" onclick="comecar()">Modo MultiPlayer</button>
		<button id="btn-novamente" onclick="denovo()"> Jogar novamente </button> -->
	</body>
</html>