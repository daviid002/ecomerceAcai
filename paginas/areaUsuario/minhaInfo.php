<?php

include('../../acoes.php');
 

   $nome = $_SESSION["NOME"];
   $sobrenome = $_SESSION["SOBRENOME"]; 
   $email = $_SESSION["EMAIL"];
   $telefone = $_SESSION["TELEFONE"];
   $idUsuario =$_SESSION["ID_USUARIO"]; 
 ?>


<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
 <form class="formularios">
    
     <label type="text"  id="idUser" hidden value="<?php=$idUsuario?>"><?php echo $idUsuario; ?></label>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationServer01">Nome</label>
        <label type="text" class="form-control" id="exibNome" value="<?php=$nome?>"> <?php echo $nome; ?> </label>    
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationServer02">Sobre Nome</label>
        <label type="text" class="form-control" id="exibSobrenome" value="<?php=$sobrenome?>"> <?php echo $sobrenome; ?> </label>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationServer03">E-mail</label>
        <label type="text" class="form-control"id="exibeEmail" value="<?php=$email?>"> <?php echo $email; ?> </label>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationServer03">Telefone</label>
        <label type="text" class="form-control" id="exibTel" value="<?php=$telefone?>"> <?php echo $telefone; ?> </label>
        <div id="validationServer03Feedback" class="invalid-feedback">
        </div>
      </div>    
    </div>
   <button type="button" class="btn btn-primary" data-toggle="modal" onclick="modalEdt();" data-target="#exampleModal">Editar</button>
 </form>	
</body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Dados</h5>
        <button type="button" class="close" id="fecharMOdal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="formularios" id="formularioEdtUser">
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
            <input type="text" class="form-control " id="validationServer03"  aria-describedby="validationServer03Feedback" required>
        
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationServer03">Telefone</label>
            <input type="text" class="form-control " id="validationServer05" aria-describedby="validationServer03Feedback" required>
            <div id="validationServer03Feedback" class="invalid-feedback">
             
            </div>
          </div>    
          <div class="col-md-6 mb-3">
            <label for="validationServer05">Senha</label>
            <input type="text" class="form-control " id="validationServer06" aria-describedby="validationServer05Feedback" required>
             <p id="rodapeSenha"> Adicione sua senha ou uma nova </p>
          </div>                     
        </div>
      </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" onclick="edtUser();">Editar</button>
      </div>
    </div>
  </div>
</div>
</html>