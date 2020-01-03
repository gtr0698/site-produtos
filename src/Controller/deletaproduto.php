<?php 
require __DIR__ . '/../../vendor/autoload.php';
use Site\dao\ProdutoDao;

$id = $_GET['id'];

$dao = new ProdutoDao();

$dao->delete($id);


header("Location: /site/view/produto/listar-produto.php");

?>