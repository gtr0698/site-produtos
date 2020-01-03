<?php 
require __DIR__ . '/../cabecalho-html.php';
require __DIR__ . '/../../vendor/autoload.php';

use Site\dao\ProdutoDao;

$produtos;
$dao = new ProdutoDao();

if(isset($_POST['descricao'])){
  
  $descricao = $_POST['descricao'];
  $produtos = $dao->listLike($descricao);

}else{
  
  $produtos = $dao->listAll();
}

?>
<a class="btn btn-primary" href="/site/view/produto/cadastrar-produto.php" role="button">Cadastrar</a>

<form action="#" method="post">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Descrição</label>
        <input type="text" class="form-control" name="descricao">
      </div>
      <button type="submit" class="btn btn-primary">Buscar</button>
</form>

    <h1>Produtos</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Descrição</th>
      <th scope="col">Valor</th>
      <th scope="col">Peso</th>
      <th>#</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
  	<?php for($i = 0; $i < count($produtos); $i++){?>
    <tr>
      <th scope="row"><?php echo $produtos[$i]['id'];?></th>
      <td><?php echo $produtos[$i]['descricao'];?></td>
      <td><?php echo $produtos[$i]['valor'];?></td>
      <td><?php echo $produtos[$i]['peso'];?></td>
      <td><a class="btn btn-success" href="http://localhost/site/view/produto/atualizar-produto.php?id=<?php echo $produtos[$i]['id'];?>" role="button">Atualizar</a></td>
      <td><a class="btn btn-danger" href="http://localhost/site/src/Controller/deletaproduto.php?id=<?php echo $produtos[$i]['id'];?>" role="button">Deletar</a></td>
    </tr>
    <?php } ?>
</tbody>
</table>

<?php 
require __DIR__ . '/../rodape-html.php';
?>