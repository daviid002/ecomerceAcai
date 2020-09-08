<?php 
require_once '../../vendor/autoload.php';
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];
$usuario = new \app\model\Usuario();

$usuario -> setEmail($email);
$usuario -> setSenha($senha);

$usuarioDao = new \app\model\usuarioDao();
$usuarioDao -> logar($usuario);

foreach ($usuarioDao -> logar($usuario) as $usuario) {

	if($usuario['id_user'] >0)
	{
		$_SESSION["ID_USUARIO"]= $usuario['id_user'];
		$_SESSION["NOME"]= $usuario['nome'];
		$_SESSION["SOBRENOME"]= $usuario['sobrenome']; 
		$_SESSION["EMAIL"]=  $usuario['email'];
		$_SESSION["TELEFONE"]= $usuario['tel']; 
		echo 1;

	}else{
		echo 0;
	}


	# code...
}

//var_dump($_SESSION);

?>