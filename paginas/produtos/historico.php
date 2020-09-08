<?php
include('../../acoes.php');
$id_usuario = $_SESSION["ID_USUARIO"];
 ?>
 <!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="fundo areaUser">
 <label type="text"  id="idUserHist" hidden value="<?php=$idUsuario?>"><?php echo $idUsuario; ?></label>
	<div class=".IngredienteScroll">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Descrição</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody id="historicoTab">  
  </tbody>
</table>
</div>
 </div>
</body>
</html>