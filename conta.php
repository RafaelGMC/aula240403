<?php 

class conta
{
	var $Agencia;
	var $Codigo;
	var $DataDeDriacao;
	var $Titular;
	var $Senha;
	var $Saldo;
	var $Cancelar;
}
function retirar($quantia){
	if ($quantia > 0) {
		$this->$saldo -= $quantia;
	}
}

function depositar($quantia){
	if ($quantia > 0) {
		$this->$saldo += $quantia;
	}
}

function obtersaldo($quantia){
	return $this->saldo; 
}




 ?>
