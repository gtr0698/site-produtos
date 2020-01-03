<?php 
namespace Site\dao;

use Site\db\Sql;
use Site\Entity\Produto;

class ProdutoDao {

	public function listAll(){
		$sql = new Sql();

		$query = 'select * from produto';

		$resultado = $sql->select($query);

		return $resultado;
	}

	public function delete($id){
		$sql = new Sql();

		$query = 'delete from produto where id = ' . $id;

		$sql->executar($query);
	}

	public function insert($produto){
		$sql = new Sql();

		$query = 'insert into produto (descricao, valor, peso) values (' 
					."'" . $produto->getDescricao() ."'" . ','
					."'" . $produto->getValor() ."'" . ','
					."'" . $produto->getPeso() ."'" . ')';
		

		$sql->executar($query);
	}

	public function listLike($descricao){
		$sql = new Sql();

		$query = "select * from produto where descricao like '%".$descricao . "%'";
		
		$resultado = $sql->select($query);

		return $resultado;
	}

	public function listOne($id){
		$sql = new Sql();

		$query = 'select * from produto where id =' . $id;

		$resultado = $sql->select($query);

		return $resultado;
	}

	public function update($dados){
		$sql = new Sql();

		$query = 'update produto set descricao = ' 
					."'" . $dados['descricao'] ."'" . ','
					. "valor = " ."'" . $dados['valor'] ."'" . ','
					. "peso = " ."'" . $dados['peso'] ."'"
					. " where id = " . $dados['id'];


		$sql->executar($query);
	}
}
?>