<?php 
namespace src\dao;

use src\db\Sql;
use src\Entity\Produto;

class ProdutoDao {

	public function listAll(){
		$sql = new Sql();

		$query = 'select * from produto';

		$resultado = $sql->select($query);

		return $resultado;
	}

	public function delete($id){
		$sql = new Sql();

		$query = 'delete from produto wherer id= ' . $id;

		$sql->executar($query);
	}

	public function insert(){
		$sql = new Sql();

		$query = 'insert into produto (descricao, valor, peso) values ('notbook', '8791', '20');'

		$sql->executar($query);
	}

	public function listLike($descricao){
		$sql = new Sql();

		$query = 'select * from produto where descricao like %' .$descricao . '%';

		$resultado = $sql->select($query);

		return $resultado;
	}
}
?>