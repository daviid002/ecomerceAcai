<?php 
require_once '../../vendor/autoload.php';


$produto = new \app\model\Produto();
$produto -> setId();
$produto -> setNome();
$produto -> setPrecop();
$produto -> setPrecom();
$produto -> setPrecog();


$produtoDao = new \app\model\ProdutoDao();
if($_POST['op'] == 1){
	$produtoDao->create($produto);	
}elseif ($_POST['op'] == 2) {
	$produtoDao->read();
foreach ($produtoDao ->read() as $produto) {

}

}elseif ($_POST['op'] == 3) {
	$produtoDao->update($produto);
}elseif ($_POST['op'] == 4) {
	$produtoDao->delete($produto);
}



?>