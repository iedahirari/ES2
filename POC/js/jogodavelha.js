var vez;
var tabuleiro = ["","","","","","","","",""];
var ganhou;
var modeGame;

function comecar(modeGame){
	this.modeGame = modeGame;
	document.getElementById("sub-container").style.pointerEvents = "auto";
	document.getElementById("sub-container").style.opacity = 1;
	document.getElementById("btn-iniciar-single").style.pointerEvents = "none";
	document.getElementById("btn-iniciar-single").style.opacity = 0.5;
	document.getElementById("btn-iniciar-multip").style.pointerEvents = "none";
	document.getElementById("btn-iniciar-multip").style.opacity = 0.5;
	sortearQuemComeca();
}

function recomecar(){
	document.location.reload(true);
}

function sortearQuemComeca(){
	vez = Math.floor(Math.random() * 2);
}

function troca (field) {
	let div = field.id;
	let numero = div.replace(/\D/gim, '');

	if(modeGame == 0){
		jogadaSinglePlayer(div, numero);
	}else if(modeGame == 1){
		jogadaMultiPlayer(div, numero);
	}
}

// MODO SINGLE PLAYER

function jogadaSinglePlayer(div, numero){
	if(vez == 0 && document.getElementById(div).innerHTML == ""){
		document.getElementById(div).innerHTML = "O";
		tabuleiro[numero] = "O";
		vez = 1;
		if(! verVitoria("O")) maquinaVerCasasVazias();
	}else if(vez == 1  && document.getElementById(div).innerHTML == ""){
		document.getElementById(div).innerHTML = "X";
		tabuleiro[numero] = "X";
		vez = 0;
		if(! verVitoria("X")) maquinaVerCasasVazias();
	}
}

function maquinaVerCasasVazias(){
	let casasVazias = [];
	for(let i = 1; i<=9; i++){
		let div = document.getElementById("field"+i);
		let divId = div.id;
		if(document.getElementById(divId).innerHTML == ""){
			casasVazias.push(i);
		}
	}
	maquinaJoga(casasVazias);
}

function maquinaJoga(array){
	let i = sortearCasa(array.length-1);
	let resultado = array[i];

	if(vez == 0){
		document.getElementById("field"+resultado).innerHTML = "O";
		tabuleiro[resultado] = "O";
		vez = 1;
		verVitoria("O");
	}else if(vez == 1){
		document.getElementById("field"+resultado).innerHTML = "X";
		tabuleiro[resultado] = "X";
		vez = 0;
		verVitoria("X");
	}
}

function sortearCasa(numero){
	resultado = Math.floor(Math.random() * numero);
	return resultado;
}

//--------------------------------------------------------

// MODO MULTI PLAYER

function jogadaMultiPlayer(div, numero){
	if(vez == 0 && document.getElementById(div).innerHTML == ""){
		document.getElementById(div).innerHTML = "O";
		tabuleiro[numero] = "O";
		vez = 1;
		verVitoria("O");
	}else if(vez == 1  && document.getElementById(div).innerHTML == ""){
		document.getElementById(div).innerHTML = "X";
		tabuleiro[numero] = "X";
		vez = 0;
		verVitoria("X");
	}
}

//--------------------------------------------------------

function verVitoria(opcao){
	let coisa = document.getElementById("desfecho-p");
	let coisa2 = coisa.id;

	console.log(tabuleiro);

	if (tabuleiro[1] == opcao && tabuleiro[2] == opcao && tabuleiro[3] == opcao ||
		tabuleiro[4] == opcao && tabuleiro[5] == opcao && tabuleiro[6] == opcao ||
	 	tabuleiro[7] == opcao && tabuleiro[8] == opcao && tabuleiro[9] == opcao ||
	 	tabuleiro[1] == opcao && tabuleiro[4] == opcao && tabuleiro[7] == opcao ||
	 	tabuleiro[2] == opcao && tabuleiro[5] == opcao && tabuleiro[8] == opcao ||
	 	tabuleiro[3] == opcao && tabuleiro[6] == opcao && tabuleiro[9] == opcao ||
	 	tabuleiro[1] == opcao && tabuleiro[5] == opcao && tabuleiro[9] == opcao ||
	 	tabuleiro[3] == opcao && tabuleiro[5] == opcao && tabuleiro[7] == opcao){
			document.getElementById("desfecho").style.display = "flex";
			document.getElementById(coisa2).innerHTML = " JOGADOR " + opcao + " VENCEU! :) ";
			bloqueiaTudo();
			return true;
	}else{
		verVelha();
	}
}

function verVelha(){
	let coisa = document.getElementById("desfecho-p");
	let coisa2 = coisa.id;
	let cont = 0;

	for (var i = 1; i <=9; i++) {
		if(tabuleiro[i] == "X" || tabuleiro[i] == "O"){
			cont++;
		}
	}

	if(cont == 9){
		document.getElementById("desfecho").style.display = "flex";
		document.getElementById(coisa2).innerHTML = " DEU VELHA :P ";
		bloqueiaTudo();
	}
}

function bloqueiaTudo(){
	for (var i = 1; i <=9; i++) {
		document.getElementById("field"+i).style.pointerEvents = "none";
		document.getElementById("field"+i).style.opacity = 0.2;
	}
}

function denovo(){
	
	for (var i = 1; i <=9; i++) {
		document.getElementById("field"+i).style.pointerEvents = "auto";
		document.getElementById("field"+i).style.opacity = 1; 
		document.getElementById("field"+i).innerHTML = ""; 
		tabuleiro[i] = "";
		document.getElementById("desfecho").style.display = "none";
	}
	sortear();
}
