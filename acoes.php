<?php
//include('paginas/produtos/produtosVenda.php');

require_once 'vendor/autoload.php';
session_start();

function verificarSessao()
{
	if(isset($_SESSION["ID_USUARIO"]))
	{
	header('Location:ecomerce/paginas/minhaArea.php');	

	}else
	{
		header('Location:index.php');
	}

}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <! -- Jquery documentação no site : https://jquery.com/ -->
	<script src="js/jquery-3.5.1.js"></script>
 
 <! -- JqueryConfirm documentação no site : https://craftpip.github.io/jquery-confirm -->
	<link rel="stylesheet" href="css/jquery-confirm.min.css">
	<script src="js/jquery-confirm.min.js"></script>
<! -- codificação em md5 documentação no site :https://github.com/placemarker/jQuery-MD5 -->
	<script src="js/jquery.md5.js"></script>

<! -- Bootstrap documentação no site : https://getbootstrap.com/docs/4.5/getting-started/introduction/ -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<! -- js das funções do projeto  -->
	<script src="js/funcoes.js"></script>
<! -- css para adquar o layout  -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

 </head>
 <body>

 </body>
 </html>
