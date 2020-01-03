<?php 
require __DIR__ . '/../cabecalho-html.php';

require __DIR__ . '/../../vendor/autoload.php';
use Site\dao\ProdutoDao;

$id = $_GET['id'];

$dao = new ProdutoDao();

$produto = $dao->listOne($id);


?>

<h1>Atualização de Produto</h1>

		<form action="/site/src/Controller/atualizaproduto.php" method="post">
		<input type="hidden" class="form-control" name="id" value="<?php echo $produto[0]['id'];?>">

		  <div class="form-group col-md-6">
		    <label for="exampleInputEmail1">Descrição</label>
		    <input type="text" class="form-control" name="descricao" value="<?php echo $produto[0]['descricao'];?>">
		  </div>
		  <div class="form-group col-md-6">
		    <label for="exampleInputPassword1">Valor</label>
		    <input type="text" class="form-control" name="valor" value="<?php echo $produto[0]['valor'];?>">
		  </div>
		  <div class="form-group col-md-6">
		    <label for="exampleInputEmail1">Peso</label>
		    <input type="text" class="form-control" name="peso" value="<?php echo $produto[0]['peso'];?>">
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form>

<?php 
require __DIR__ . '/../rodape-html.php';
?>