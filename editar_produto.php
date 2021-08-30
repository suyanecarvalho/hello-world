<?php

session_start();

if($_SESSION['acesso'] != 1){
	//Mensagem de erro	
	$_SESSION['loginErro'] = " Acesso inválido!";
	
	//Redireciona para página de login
	header("Location: login.php");
}

$id_produto = $_GET['id'];
//echo $id_ptoduto;
$select = mysql_query("SELECT * FROM produtos WHERE id = $id_produto");
$produto = mysql_fetch_assoc($select);
//var_dump($produto);
$select = mysql_query("SELECT * FROM categorias WHERE id_categoria = $produto[categoria]");
$categoria = mysql_fetch_assoc($select);
//var_dump($categoria);
?>

<center><h1>Editar Produto</h1></center>
<div class="container theme-showcase" role="main">
	<div class="row">
		<div class="col-md-12">
		
		<div class="panel panel-default">
		<div class="panel-body">
			<form class="form-horizontal" method="POST" action="processa/proc_edit_produto.php">
			
			<input type="hidden" class="form-control" name="id_produto" 
			placeholder="" value="<?php echo $produto['id']?>" required>
			
			<div class="form-group">
				<label for="inputNome" class="col-sm-2 control-label">Nome:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="nome_produto" placeholder="" 
                    value="<?php echo $produto['nome_produto']?>" required autofocus>
				</div>
			</div>
				
			<div class="form-group">
				<label for="inputcategoria" class="col-sm-2 control-label">Categoria:</label>
				<div class="col-sm-3">
					<select class="form-control" name="categoria" required>
						<?php
						 $select = mysql_query("SELECT * FROM categorias WHERE id_categoria != $categoria[id_categoria]");
						 while($categorias = mysql_fetch_array($select)){?>
							 <option value="<?php echo $categorias['id_categoria']?>"><?php echo $categorias['nome_categoria']?>
							 </option>
				   <?php }
					   ?>
					</select>
				</div>
			</div>
				
			<div class="form-group">
				<label for="inputQuantidade" class="col-sm-2 control-label">Quantidade:</label>
				<div class="col-sm-3">
					<input type="number" min="0" class="form-control" name="quantidade" placeholder="" 
                    value="<?php echo $produto['quantidade']?>" required >
				</div>
			</div>
				
			<div class="form-group">
				<label for="inputPreco" class="col-sm-2 control-label">Preço:</label>
				<div class="col-sm-3">
					<input type="float" min="0" max="1000.000" class="form-control" name="preco" placeholder=""
                     value="<?php echo $produto['preco']?>" required >
				</div>
			</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-info">Salvar</button>
					<a href='administrativo.php?link=0'>
					<button type='button' class='btn btn-danger'>Cancelar</button>
						</a>
					</div>
				</div>				
			</form>
		</div>
		</div>
		
		</div>
	</div>
</div>