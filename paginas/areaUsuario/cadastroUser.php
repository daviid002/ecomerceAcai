<?php

include('../../acoes.php');
 ?>


<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<div class="fundo">
<form class="formularios">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer01">Nome</label>
      <input type="text" class="form-control" id="validationServer01" value="" required>
      
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationServer02">Sobre Nome</label>
      <input type="text" class="form-control" id="validationServer02" value="" required>

    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">E-mail</label>
      <input type="text" class="form-control " id="validationServer03" placeholder="e-mail@email.com" aria-describedby="validationServer03Feedback" required>
  
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Confirme E-mail</label>
      <input type="text" class="form-control " id="validationServer04" placeholder="e-mail@email.com" aria-describedby="validationServer03Feedback" required>
      <div id="validationServer03Feedback" class="invalid-feedback">
        
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Telefone</label>
      <input type="text" class="form-control " id="validationServer05" aria-describedby="validationServer03Feedback" required>
      <div id="validationServer03Feedback" class="invalid-feedback">
       
      </div>
    </div>    
    <div class="col-md-3 mb-3">
      <label for="validationServer05">Senha</label>
      <input type="text" class="form-control " id="validationServer06" aria-describedby="validationServer05Feedback" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" style="color: white">
        Aceite o termos e condições
        <a href="#"  onclick="termsUso()" >Termos e Condições</a>
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="button" onclick="SubmeterCadastro()">Cadastrar</button>
</form>	
</div>
</body>
</html>