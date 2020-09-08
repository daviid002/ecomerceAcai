<?php 
require_once '../../vendor/autoload.php';


$ingre = new \app\model\Ingredientes();

//$ingre -> setIdIngr($id_ingr);
//$ingre -> setNomeIngr($nome);
//$ingre -> setValorIngr($valor);

$ingredientesDao = new \app\model\ingredientesDao();

	$ingredientesDao->readIngr();
foreach ($ingredientesDao ->readIngr() as $ingre) {

	echo "<tr><th scope='row' id='ing1'>".$ingre['nome']."</th>
		  <td>".$ingre['valor']."</td>
		  <td><button type='button' onclick='addIngredientes(\"".$ingre['nome']."\",\"".$ingre['valor']."\",\"".$ingre['id_ingr']."\")'class='btn btn-success'>+</button></td></tr>";
}


















?>