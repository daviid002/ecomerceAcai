<?php

include('acoes.php');



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Reino Açai</title>
 </head>
 <body class="body">
 <nav class="navbar navbar-light bg-light shadow p-3 mb-5 bg-white rounded" id="menuTopo">
  <a class="navbar-brand" href="#">
    <img src="img/logo.png" width="100" height="70" class="d-inline-block align-top" alt="" loading="lazy">
  </a>
  

<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary" onclick="carregar('','','index','1')">Home</button>
  <div class="btn-group dropleft" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	Acesso
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" onclick="carregar('#conteudoCentral','areaUsuario','cadastroUser','')"  href="#">Cadastro</a>
      <a class="dropdown-item"onclick="carregar('#conteudoCentral','areaUsuario','pgLogin','')"  href="#">Login</a>
    </div>
  </div>
</div>
</nav>
<div id="conteudoCentral">
	<div id="carroselPrincipal"  class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carroselPrincipal" data-slide-to="0" class="active"></li>
	    <li data-target="#carroselPrincipal" data-slide-to="1"></li>
	    <li data-target="#carroselPrincipal" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="img/acai1.png"  width="600" height="600" class="rounded mx-auto d-block " alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="img/acai2.png"  width="600" height="600" class="rounded mx-auto d-block " alt="...">
	    </div>
	    <div class="carousel-item">
	       <img src="img/acai1.png"  width="600" height="600" class="rounded mx-auto d-block " alt="...">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carroselPrincipal" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carroselPrincipal" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
	<footer class="main-footer" id="rodaPe"> 
   		 <strong>Copyright © <a href="http://google.com.br">Reino Açaí Cosmópolis</a>.</strong> Todos os direitos reservado.
  	</footer>
 </body>
 </html>