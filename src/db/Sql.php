<?php 
namespace src\db;

class Sql {
	private $conn;

	public function __construct(){
		$this->conn = new PDO('mysql:host=localhost;dbname=site', 'root', '');
	}

	public function executar($sql){
		$stmt = $this->conn->prepare($sql);

		$stmt->execute();

		return $stmt;
	}

	public function select($sql){
		$stmt = $this->executar($sql);

		$resp = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $resp;
	}

}
?>