<?php

if($_SESSION['acesso'] !=1) {
$_SESSION['loginErro']= "Acesso Inválido";
header ("Location: login.php");
}

?>
  
<div class="container theme-showcase" role="main"> 
<div class="page-header"> 
<h1>Cadastro de Produtos</h1> 
</div> 
<div class="row"> 
<div class="col-md-12"> 
<form class="form-horizontal" method="POST" action= 
"processa/proc_cad_produto.php"> 

<div class="form-group">
<label for="inputNome" class="col-sm-2 control-label">Nome: </label> <div class="col-sm-4"> 
<input type="text" class="form-control" name="nome" placeholder="" 
required autofocus> 
</div> </div> 

<div class="form-group"> 
<label for="inputQuantidade" class="col-sm-2 control-label">Quantidade:</label> <div class="col-sm-4"> 
<input type="number" class="form-control" name="quantidade" placeholder="" 
required> </div> </div> 

<div class="form-group"> 
<label for="inputCategoria" class="col-sm-2 control-label">Categoria: </label> 
<div class="col-sm-4"> 
<select class="form-control" name="categoria" required> 


<option>Selecione</option> 
<?php
	$select = mysql_query("SELECT * FROM categorias");
    while($categorias = mysql_fetch_array($select)){?>
        <option value="<?php echo $categorias['id_categoria']?>"><?php echo $categorias['nome_categoria']?></option>
        
<?php } ?>  <!--finalizando o WHILE -->
</select> 
</div> </div> 

<div class="form-group">
<label for="inputPreco" class="col-sm-2 control-label">Preço: </label> 
<div class="col-sm-4"> 
<input type="text" class="form-control" name="preco" placeholder="R$" 
required > 
</div> </div> 

<div class="form-group"> 
<div class="col-sm-offset-2 col-sm-10"> 
<button type="submit" class="btn btn-info">Salvar</button> 
<a href='administrativo.php?link=1&id=<?php echo $resultado ['id']; ?>'> 
<button type='button' class='btn btn-danger' >Cancelar</button></a> 
</div> 
</div>
 </form>
 </div> 
</div> 
</div> <!-- I container --> 


