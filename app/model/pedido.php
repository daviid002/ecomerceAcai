<?php 
namespace app\model;

class Pedido{

private $id_pedido;
private $id_usuario;
private $descricao;
private $valor;


public function getIdPedido(){
	return $this -> id_pedido;
}
public function setIdPedido($id_pedido){
	$this -> id_pedido = $id_pedido;
}
public function getIdUsuario(){
	return $this -> id_usuario;
}
public function setIdUsuario($id_usuario){
	$this -> id_usuario = $id_usuario;
}
public function getDescricao(){
	return $this -> descricao;
}
public function setDescricao($descricao){
	$this -> descricao = $descricao;
}
public function getValor(){
	return $this -> valor;
}
public function setValor($valor){
	$this -> valor = $valor;
}

}


?>