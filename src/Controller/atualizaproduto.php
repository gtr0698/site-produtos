<?php 
require __DIR__ . '/../../vendor/autoload.php';
use Site\dao\ProdutoDao;

$dados = $_POST;

$dao = new ProdutoDao();

$dao->update($dados);

header("Location: /site/view/produto/listar-produto.php");

?>