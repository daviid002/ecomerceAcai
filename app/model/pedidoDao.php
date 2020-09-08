<?php 
namespace app\model;

class PedidoDao{


public function createPedido(Pedido $p){
	$sql='INSERT INTO pedido(
					id_usuario,
					descricao,
					valor)
					VALUES(?,?,?)';
	try{				
	$stmt = Conexao:: getConn() -> prepare($sql);
	$stmt -> bindValue(1, $p -> getIdUsuario());
	$stmt -> bindValue(2, $p -> getDescricao());
	$stmt -> bindValue(3, $p -> getValor());
	$stmt -> execute();	
	echo 1;
	}catch(Exception $e){
		echo $e;
	}			

}
public function readPedido(Pedido $p){
	$sql='SELECT * FROM pedido WHERE id_usuario=?';
	try{
	$stmt = Conexao:: getConn() -> prepare($sql);
	$stmt -> bindValue(1, $p -> getIdUsuario());
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
public function updatePedido(Pedido $e){
	
	$sql='UPDATE pedido SET id_usuario=?, descricao =?, valor=? WHERE id_pedido=?';

	$stmt = Conexao:: getConn() -> prepare($sql);

	$stmt -> bindValue(1, $e -> getIdUsuario());
	$stmt -> bindValue(2, $e-> getDescricao());
	$stmt -> bindValue(3, $e -> getValor());
	$stmt -> bindValue(4, $e -> getIdPedido());
	$stmt -> execute();


}
public function deletePedido(){
	$sql='DELETE FROM pedido Where id_pedido=?';

	$stmt = Conexao:: getConn() -> prepare($sql);
	$stmt -> bindValue(1, $e -> getIdPedido());
	$stmt -> execute();

}






}



?>