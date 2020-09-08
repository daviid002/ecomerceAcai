<?php 
namespace app\model;

class Produto
{	
	private $id_produto;
	private $nome_produto; 
	private $preco_p;
	private $preco_m;
	private $preco_g;

	public function getId(){
		return $this -> id_produto;
	}
	public function setId($id_produto){
		$this -> id_produto = $id_produto;
	}
	public function getNome(){
		return $this -> nome_produto;
	}
	public function setNome($nome_produto){
		$this -> nome_produto = $nome_produto;
	}
	public function getPrecop(){
		return $this -> preco_p;
	}	
	public function setPrecop($preco_p){
		$this -> preco_p = $preco_p;
	}
	public function getPrecom(){
		return $this -> preco_m;
	}	
	public function setPrecom($preco_m){
		$this -> preco_m = $preco_m;
	}
	public function getPrecog(){
		return $this -> preco_g;
	}	
	public function setPrecog($preco_g){
		$this -> preco_g = $preco_g;
	}		

}

?>