<?php 

namespace app\model;


class Usuario
{
	private $id_user;
	private $nome;
	private $sobrenome;
	private $email;
	private $tel;
	private $senha;


	public function getId(){
		return $this -> id_user;
	}
	public function setId($id_user){
		$this -> id_user = $id_user;
	}
	public function getNomeUser(){
		return $this -> nome;
	}
	public function setNomeUser($nome){
		$this -> nome = $nome;
	}
	public function getSobreNome(){
		return $this -> sobrenome;
	}
	public function setSobrenome($sobrenome){
		$this -> sobrenome = $sobrenome;
	}
	public function getEmail(){
		return $this -> email;
	}
	public function setEmail($email){
		$this -> email = $email;
	}
	public function getTel(){
		return $this -> tel;
	}
	public function setTel($tel){
		$this -> tel = $tel;
	}
	public function getSenha(){
		return $this -> senha;
	}
	public function setSenha($senha){
		$this -> senha = $senha;
	}

}





?>