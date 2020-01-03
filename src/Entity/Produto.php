<?php
namespace Site\Entity; 

class Produto {
	private $id;
	private $descricao;
	private $valor;
	private $peso;

	public function setId($id){
		$this->id = $id;
	}

	public function getId(){
		return $this->id;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function getValor(){
		return $this->valor;
	}

	public function setPeso($peso){
		$this->peso = $peso;
	}

	public function getPeso(){
		return $this->peso;
	}
}
?>