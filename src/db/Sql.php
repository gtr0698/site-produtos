<?php 
namespace Site\db;

class Sql {
	private $conn;

	public function __construct(){
		$this->conn = new \PDO('mysql:host=localhost;dbname=site', 'root', '');
	}

	public function executar($query){
		$stmt = $this->conn->prepare($query);

		$stmt->execute();

		return $stmt;
	}

	public function select($query){
		$stmt = $this->executar($query);

		$resp = $stmt->fetchAll(\PDO::FETCH_ASSOC);

		return $resp;
	}

}
?>