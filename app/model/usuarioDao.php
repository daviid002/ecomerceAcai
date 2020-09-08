<?php
namespace app\model;

/**
 * 
 */
class usuarioDao
{
	
	public function createUser(Usuario $u){
		$sql = 'INSERT INTO 
		usuario(
		nome,
		sobrenome,
		email,
		tel,
		senha
		)
		VALUES(?,?,?,?,?)';
		try{
		$stmt =  Conexao::getConn() -> prepare($sql);
		$stmt -> bindValue(1, $u -> getNomeUser());
		$stmt -> bindValue(2, $u -> getSobreNome());
		$stmt -> bindValue(3, $u -> getEmail());
		$stmt -> bindValue(4, $u -> getTel());
		$stmt -> bindValue(5, $u -> getSenha());
		$stmt -> execute();
		echo 1;
		}catch(Exception $e){
			echo $e;
		}
	}	
	public function readUser(Usuario $u){
		if($u -> getId() > 0)
		{
			$sql ='SELECT * FROM usuario WHERE id_user =?';
		}else{
			$sql ='SELECT * FROM usuario';
		}
		try{
		$stmt = Conexao:: getConn() -> prepare($sql);
		if($u -> getId() > 0){
			$stmt -> bindValue(1, $u -> getId());
			}	
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
	public function updateUser(Usuario $u){
		$sql ='UPDATE usuario
			   SET 	nome = ?,
					sobrenome = ?,
					email = ?,
					tel = ?,
					senha = ?
				WHERE id_user=?';
		try{
			$stmt = Conexao:: getConn() -> prepare($sql);	
			$stmt -> bindValue(1, $u -> getNomeUser());
			$stmt -> bindValue(2, $u -> getSobreNome());
			$stmt -> bindValue(3, $u -> getEmail());
			$stmt -> bindValue(4, $u -> getTel());
			$stmt -> bindValue(5, $u -> getSenha());
			$stmt -> bindValue(6, $u -> getId());				
			$stmt -> execute();	
			echo 1;
		}catch(Exception $e){
			echo $e;
		}

	}
	public function deleteUser(Usuario $u){
		$sql ='DELETE FROM usuario WHERE id_user=?';
		try{
			$stmt = Conexao:: getConn() -> prepare($sql);
			$stmt -> bindValue(1, $u -> getId());
			$stmt -> execute();
			}catch(Exception $e){
				echo $e;
			}		
	}
	public function logar(Usuario $u)
	{
		$sql ='SELECT * FROM usuario WHERE email =? AND senha =?';
		$stmt = Conexao:: getConn() -> prepare($sql);
		$stmt -> bindValue(1, $u -> getEmail());
		$stmt -> bindValue(2, $u -> getSenha());
		$stmt -> execute();
		
		if($stmt -> rowCount() > 0){
			$resultado = $stmt ->fetchAll(\PDO:: FETCH_ASSOC);
			return $resultado;
			
		}else
		{
			return $resultado =[];
		}


	}
}
 ?>