<?php

if(($_SESSION['acesso'] == 1) || ($_SESSION['acesso'] == 3)){

}else{
	//Mensagem de erro	
	$_SESSION['loginErro'] = " Acesso inválido!";
	
	//Redireciona para página de login
	header("Location: login.php");
}

$select=mysql_query("SELECT produtos.id, produtos.nome_produto, categorias.nome_categoria,
 produtos.quantidade, produtos.preco FROM produtos INNER JOIN categorias ON produtos.categoria = categorias.id_categoria");
?>
	 	<center> <h1> Lista de Produtos</h1></center>
	 <div class="container theme-showcase" role="main">
	 <div class="page-header">
	 </div>
	 <div class="row">
	 <div class="col-md-12"> <!--divisor que divide a linha row em 12 coluna-->
	 <table class="table table-striped">
	 <thead>
	 <tr>
	 <th>ID</th>
	 <th>Nome</th>
	 <th>Categoria</th>
	 <th>quantidade</th>
	 <th>preco</th>
	 <th>AÇÕES</th>

	 </thead>
	 <tbody>
	 <?php
	 while($produtos = mysql_fetch_array($select)){
	 echo"<tr>";
	 echo"<td>".$produtos['id']."</td>";
	 echo"<td>".$produtos['nome_produto']."</td>";
	 echo"<td>".$produtos['nome_categoria']."</td>";
	 echo"<td>".$produtos['quantidade']."</td>";
	 echo"<td>R$ ".$produtos['preco']."</td>";

	 if ($_SESSION['acesso'] == 1){
	 echo"<td><a href='administrativo.php?link=11&id=".$produtos['id']."'>
	 <button type='button' class='btn btn-sm btn-primary'>Exibir</button></a>
	 
	 <a href='administrativo.php?link=6&id=".$produtos['id']."'>
	 <button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
	 
	 <a href='processa/proc_apagar_produto.php?id=".$produtos['id']."'>
	 <button type='button' class='btn btn-sm btn-danger'>Excluir</button></a></td>";
	

	}else if ($_SESSION['acesso'] == 3){
		echo"<td><a href='usuario.php?link=8&id=".$produtos['id']."'>
		<button type='button' class='btn btn-sm btn-primary'>Exibir</button></a>	 </td>";
					
						
	}else{
		
	}
	
	echo"</tr>";
}
?>
</tbody>
</table>
</div>	
</div>
</div>