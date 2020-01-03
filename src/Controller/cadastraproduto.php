<?php 
require __DIR__ . '/../../vendor/autoload.php';
use Site\dao\ProdutoDao;
use Site\Entity\Produto;

$dados = $_POST;



$produto = new Produto();

$produto->setDescricao($dados['descricao']);
$produto->setValor($dados['valor']);
$produto->setPeso($dados['peso']);

$dao = new ProdutoDao();
$dao->insert($produto);

header("Location: /site/view/produto/listar-produto.php");
?>