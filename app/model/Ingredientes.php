<?php 

/**
 * 
 */
namespace app\model; 
class Ingredientes
{
	private $id_ingr;
	private $nome;
	private $valor;

	public function getIdIngr(){
		return $this -> id_ingr;
	}
	public function setIdIngr($id_ingr){
		$this -> id_ingr = $id_ingr;
	}
	public function getNomeIngr(){
		return $this -> nome;
	}
	public function setNomeIngr(){
		$this -> nome = $nome;
	}
	public function getValorIngr(){
		return $this -> valor;
	}
	public function setValorIngr($valor){
		$this -> valor = $valor;
	}





}



?>