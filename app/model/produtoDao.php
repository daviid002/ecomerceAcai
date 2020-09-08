<?php 
namespace app\model;

class ProdutoDao
{
	
public function create(Produto $p){
		$sql = 'INSERT INTO
			produto(
		    nome_produto,
		    preco_p,
		    preco_m,
		    preco_g
		    )
		    VALUES( ?,?,?,?)';
		try{
				$stmt = Conexao::getConn() -> prepare($sql);
				$stmt -> bindValue(1, $p -> getNome());
				$stmt -> bindValue(2, $p -> getPrecop());
				$stmt -> bindValue(3, $p -> getPrecom());
				$stmt -> bindValue(4, $p -> getPrecog());
				$stmt -> execute();
			}catch(Exception $e){
				echo $e;
			}
}
	public function read(){

		$sql 'SELECT * FROM produto';
		try{
		$stmt = Conexao:: getConn() -> prepare($sql);
		$stmt -> execute();
		if($stmt -> rowCount()>0){
			$result = $stmt -> fatchALL(\PDO:: FETCH_ASSOC);
			return $result;
		}else{
			return [];
		}
		}catch(Exception $e)
		{
			echo $e;
		}

	}
	public function update(Produto $p){
		$sql ='UPDATE usuario
			   SET 	nome = ?,
					sobre_nome = ?,
					email = ?,
					tel = ?,
					senha = ?
				WHERE id_produto=?';
		try{
		$stmt = Conexao:: getConn() -> prepare($sql);	
		$stmt -> bindValue(1, $p -> getNome());
		$stmt -> bindValue(2, $p -> getNome());
		$stmt -> bindValue(3, $p -> getPreco());
		$stmt -> bindValue(4, $p -> getQtd());
		$stmt -> bindValue(5, $p -> getSaidaVenda());	
		$stmt -> bindValue(6, $p -> getId());		
		$stmt -> execute();			
		}catch(Exception $e)
		{
			echo $e;
		}
	}
	public function delete(Produto $p){
		$sql 'DELETE FROM produto WHERE id_produto=?';
		try{
		$stmt = Conexao:: getConn() -> prepare($sql);
		$stmt -> bindValue(1, $p -> getId());
		$stmt -> execute();		
		}catch(Exception $e)
		{
			echo $e;
		}

	}

}

?>