<?php 
require __DIR__ . '/../cabecalho-html.php';

?>

<h1>Cadastro de Produto</h1>

		<form action="/site/src/Controller/cadastraproduto.php" method="post">
		  <div class="form-group col-md-6">
		    <label for="exampleInputEmail1">Descrição</label>
		    <input type="text" class="form-control" name="descricao">
		  </div>
		  <div class="form-group col-md-6">
		    <label for="exampleInputPassword1">Valor</label>
		    <input type="text" class="form-control" name="valor">
		  </div>
		  <div class="form-group col-md-6">
		    <label for="exampleInputEmail1">Peso</label>
		    <input type="text" class="form-control" name="peso">
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form>

<?php 
require __DIR__ . '/../rodape-html.php';
?>