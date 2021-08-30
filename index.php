<?php?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtm11/DTD/xhtml1-transitional.dtd">
<html lang="pt-br">
 <!--cabeçalho html-->
 <head>
   <meta charset= "utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="pagina de acesso" contente= "Bem Vindo!">
   <meta name="author" content="Lanchonete Premiun">
   <link rel="icon" href="imagens/favicon2.ico">
   
   <title>..::: BEM VINDO :::..</title> 
   <link href="css/signin.css" rel="stylesheet">
</head>

<style type="text/css">

.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
</style>
<!-- estilo de fonte e tamanho-->


<!--js para o redirecionamento-->
<script type="text/javascript"> 
function redirectTime(){
window.location ="login.php"
} 
</script>

<!--conteudo da pagina-->
<body onLoad="setTimeout('redirectTime()',2500)"
>
 <!--container bootstrap para ajuste do conteudo da pgn-->
<div class="container">


<!--tabela para organizar o contedo-->
<table width="457" border="0" align="center">
<tr>
<td><div align="center"> <img src="imagens/logo2.png" alt="logo" width="360" height="230">
</div></td>
</tr>
 
<tr>
<td> &nbsp; </td>
</tr>
<tr>
<td> &nbsp; </td>
</tr>

<tr>
<td>
<div align="center"> <img src="imagens/loader1.gif" alt="carregando..." 
width="80" height="80"/> 
</div> 
</td> 
</tr>

<tr>
<td>
<div align="center"> 
<span class="style1"> Carregando a Página ...</span>
</div></td>
</tr>
</table> 


</div>


</body>
</html>

