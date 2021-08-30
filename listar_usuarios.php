<?php
if($_SESSION['acesso']!=1){
$_SESSION['loginErro']= "Acesso Inválido";
header ("Location: login.php");
}

$select=mysql_query("SELECT * FROM usuarios");

?>
	 	<center> <h1> Lista de Usuários</h1></center>
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
	 <th>Usuário</th>
	 <th>Email</th>
	 <th>Senha</th>
	 <th>Nivel de Acesso</th>
	 <th>Ações</th>
	 </th>
	 </thead>
	 <tbody>
	 <?php
	 while($usuarios = mysql_fetch_array($select)){
	 echo"<tr>";
	 echo"<td>".$usuarios['id']."</td>";
	 echo"<td>".$usuarios['nome_usuario']."</td>";
	 echo"<td>".$usuarios['usuario']."</td>";
	 echo"<td>".$usuarios['email']."</td>";
	 echo"<td>".$usuarios['senha']."</td>";

	 if($usuarios['nivel_acesso_id']==1){
		echo"<td><span class='label label-primary'>Administrador</span></td>";
	}else if($usuarios['nivel_acesso_id']==2){
	echo"<td><span class='label label-warning'>Cliente</span></td>";
     }else{
		echo"<td><span class='label label-info'>Usuário</span></td>";
	} 
	   echo"<td><a href='administrativo.php?link=10&id=".$usuarios['id']."'>
	   <button type='button' class='btn btn-sm btn-primary'>Exibir</button></a>

	   <a href='administrativo.php?link=3&id=".$usuarios['id']."'>
	   <button type='button' class='btn btn-sm btn-warning'>Editar</button></a>

	   <a href='processa/proc_apagar_usuario.php?&id=".$usuarios['id']."'>
	   <button type='button' class='btn btn-sm btn-danger'>Excluir</button></a>
	   </td>
	   ";
		   
	 ?>
	
	 </td>
	</tr>

	<?php } ?>
	  </tbody>
	  </table>
	  </div>
	  </div>
	  </div>