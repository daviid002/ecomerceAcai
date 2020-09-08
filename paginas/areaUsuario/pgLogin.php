<?php
include('../../acoes.php');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="fundo">
	<div class="card" style="width: 18rem;margin: auto;top: 3%;">
  <img src="img/logo.png" class="card-img-top" alt="...">
  <div class="card-body">
  	<form>
  		<div class="form-group">
  			<label>Login</label>
  			<input type="email" class="form-control" id="emailLogin" aria-describedby="emailHelp">
  		</div>
  		<div class="form-group">
  			 <label>Senha</label>
  			<input type="password" class="form-control" id="senhaLogin" aria-describedby="emailHelp">		
  		</div>
  		<button type="button" style="width: 100%" onclick="logar()" class="btn btn-primary">Logar</button>
  	</form>
    
  </div>
</div>
 
</div>
</body>
</html>
