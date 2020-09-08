<?php 
require_once '../../vendor/autoload.php';





$pedido = new \app\model\Pedido();

if(isset($_POST['id_pedido'])){
	$id_pedido = $_POST['id'];	
}else{
$id_pedido = 0;	
}
if(isset($_POST['descricao'])){
	$descricao = $_POST['descricao'];	
}else{
$descricao = 0;	
}
if(isset($_POST['valor'])){
	$valor = $_POST['valor'];	
}else{
	$valor = 0;	
}if(isset($_POST['id_usuario'])){
	$id_usuario = $id_usuario = intval($_POST['id_usuario']);	
}else{
	$id_usuario = 0;	
}


$pedido -> setIdUsuario($id_usuario);
$pedido -> setDescricao($descricao);
$pedido -> setValor($valor);
$pedido -> setIdPedido($id_pedido);

$pedidoDao = new \app\model\pedidoDao();

if($_POST['op']==1)
{
 $pedidoDao -> createPedido($pedido);	
}if($_POST['op']==2)
{
 $pedidoDao -> updatePedido($pedido);	
}if($_POST['op']==3)
{
 $pedidoDao -> readPedido($pedido);	

foreach ($pedidoDao -> readPedido($pedido) as $pedido) {
	# code...
 
 echo '<tr>
      <th scope="row">'.$pedido["descricao"].'</th>
      <td>'.$pedido["valor"].'</td>
      </tr>';
    } 
}if($_POST['op']==4)
{
 $pedidoDao -> deletePedido($pedido);	
}





?>
