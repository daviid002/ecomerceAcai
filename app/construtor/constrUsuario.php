<?php 
require_once '../../vendor/autoload.php';

$nome = $_POST['nome'];
$SbNome = $_POST['sobreNome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$senha = $_POST['senha'];

if(isset($_POST['id'])){
	$id_user = $_POST['id'];	
}else{
$id_user = 0;	
}

$usuario = new \app\model\Usuario();

$usuario -> setId($id_user);
$usuario -> setNomeUser($nome);
$usuario -> setSobrenome($SbNome);
$usuario -> setEmail($email);
$usuario -> setTel($tel);
$usuario -> setSenha($senha);

$usuarioDao = new \app\model\usuarioDao();


if($_POST['op']==1){
	$usuarioDao -> createUser($usuario);
}elseif ($_POST['op']==2){
	$usuarioDao -> readUser($usuario);
}elseif ($_POST['op']==3){
	$usuarioDao -> updateUser($usuario);
}elseif ($_POST['op']==4){	
	$usuarioDao -> deleteUser($usuario);
}








?>