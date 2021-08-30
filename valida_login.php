<?php
session_start();  //variavel global cm se fosse um ingresso   
include_once("conexao.php");  //incluindo o banco de dados
$usuario = $_POST['usuario']; //recendo as informaçoes do formulario de usu e senha
$senha = $_POST['senha'];

/*echo $usuario;     // so mostrando p ver oq ta acontecendo
echo "<br>".$senha;*/


$consulta = mysql_query("SELECT * FROM usuarios WHERE usuario= '$usuario'AND senha='$senha'");
$usuarios = mysql_fetch_assoc($consulta);
/*echo "</p>"

var_dump($usuario); //mostrar o vetor completo
echo "</p>"
echo $usuarios['nivel_acesso_id']; // mostra o vetor em partes
*/
if($usuarios['nivel_acesso_id'] == 1) {
	$_SESSION['acesso'] = 1;
	$_SESSION['nome_usuario'] = $usuarios['nome_usuario']; //ingresso para entrar na pag
	 header("Location: administrativo.php");
}else if ($usuarios['nivel_acesso_id'] == 2){
	$_SESSION['acesso'] = 2;
	$_SESSION['nome_usuario'] = $usuarios['nome_usuario'];
	header("Location: cliente.php");
}else if ($usuarios['nivel_acesso_id'] == 3){
	$_SESSION['acesso'] = 3;
	$_SESSION['nome_usuario'] = $usuarios['nome_usuario'];
	header("Location: usuario.php");
}else{
	//Mensagem de erro 
	$_SESSION['loginErro'] = " Usuário ou senha inválido";
	
	//Redireciona para página de login
	header("Location: login.php");
}
/*
if(($usuario == $usuarios['usuario']) && ($senha == $usuarios['senha'])){
	//echo "<br>Acesso Liberado!";
		$_SESSION['acesso'] = 1;
	header("Location: administrativo.php");
}else{
	//echo "<br>Acesso Negado!";
	
	// mensagem de error
	
	$_SESSION['loginErro']= " Usuário ou Senha inválido";  //redireciona pra pagn de login
	header("Location: login.php");
	
	
	/*echo"<script>
			alert('Acesso Negado! - Tente Novamente')
			window.location = 'login.php';
		 </script>";
		 */
		 


?>