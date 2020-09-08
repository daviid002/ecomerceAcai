<?php

/**
 * 
 */
namespace app\model;
class IngredientesDao{
	
	public function createIngr(Ingredientes $i)
	{
		$sql='INSERT INTO 
			  ingredientes(
			  	nome,
			  	valor
			  ) VALUES(?,?)';
		try{	  
		$stmt = Conexao::getConn() -> prepare($sql);
		$stmt -> bindValue(1, $i -> getNomeIngr());
		$stmt -> bindValue(2, $i -> getValorIngr());
		$stmt -> execute();
		}catch(Exception $e){
			echo $e;
		}

	}
	public function readIngr()
	{
		$sql='SELECT * FROM ingredientes';
		try{
		$stmt = Conexao::getConn() -> prepare($sql);
		$stmt -> execute();
		if($stmt -> rowCount()>0){
			$result = $stmt -> fetchALL(\PDO:: FETCH_ASSOC);
			return $result;
		}else{
			return [];
		}
		}catch(Exception $e){
			echo $e;
		}

	}
	public function updateIngr(Ingredientes $i){
		$sql='UPDATE ingredientes SET nome = ?, valo=? WHERE id_ingr=?';
		try{
		$stmt = Conexao::getConn() -> prepare($sql);
		$stmt -> bindValue(1, $i -> getNomeIngr());
		$stmt -> bindValue(2, $i -> getValorIngr());
		$stmt -> bindValue(3, $i -> getIdIngr());
		$stmt -> execute();
		}catch(Exception $e){
			echo $e;
		}

	}
	public function deleteIngr(Ingredientes $i){
		$sql='DELETE FROM ingredientes WHERE id_ingr=?';
		try{
		$stmt = Conexao::getConn() -> prepare($sql);	
		$stmt -> bindValue(1, $i -> getIdIngr());
		$stmt -> execute();
		}catch(Exception $e){
			echo $e;
		}

	}







}




?>