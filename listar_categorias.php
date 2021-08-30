<?php
if(($_SESSION['acesso'] == 1) || ($_SESSION['acesso'] == 3)){

}else{
	//Mensagem de erro	
	$_SESSION['loginErro'] = " Acesso inválido!";
	
	//Redireciona para página de login
	header("Location: login.php");
}

$select=mysql_query("SELECT * FROM categorias");
?>

	<center> <h1> Lista de categorias</h1></center>
	 <div class="container theme-showcase" role="main">
	 <div class="page-header">
	 </div>
	 <div class="row">
	 <div class="col-md-12"> <!--divisor que divide a linha row em 12 coluna-->
	 <table class="table table-striped">
	 <thead>
	 <tr>
	 <th>ID</th>
	 <th>Categoria</th>
	 <th> Ações</th>
	 </tr>
	 </thead>
	 <tbody>
	 <?php
	 while($categorias = mysql_fetch_array($select)){
	 echo"<tr>";
	 echo"<td>".$categorias['id_categoria']."</td>";
	 echo"<td>".$categorias['nome_categoria']."</td>";

	 if ($_SESSION['acesso'] == 1){
	 echo"<td><a href='administrativo.php?link=12&id=".$categorias['id_categoria']."'>
	 <button type='button' class='btn btn-sm btn-primary'>Exibir</button></a>
	 
	 <a href='administrativo.php?link=9&id=".$categorias['id_categoria']."'>
<button type='button' class='btn btn-sm btn-warning'>Editar</button></a>

	 <a href='processa/proc_apagar_categoria.php?id_categoria=".$categorias['id_categoria']."'>
	 <button type='button' class='btn btn-sm btn-danger'>Excluir</button></a></td>";
	
	}else if ($_SESSION['acesso'] == 3){
		echo"<td><a href='usuario.php?link=7&id=".$categorias['id_categoria']."'>
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