<?php
include('../../acoes.php');
 $nome = $_SESSION["NOME"];
$idUsuario =  $_SESSION["ID_USUARIO"];;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="fundo areaUser">
<label type="text"  id="idUsuarioHist" hidden ><?php echo $idUsuario; ?></label>
 <div class="row">
   <div class="col-md-3 col-xl-2 bd-sidebar menuUser">
    <div class="bd-toc-item">
      <ul class="nav bd-sidenav">   
         <li onclick="carregar('#areaDados','areaUsuario','minhaInfo','2');" class="menuUsuario">
           <section class="sebreporLi">  Meus Dados </section>
             <span> Meus Dados</span>
         </li>            
         <li  onclick="carregar('#areaDados','produtos','historico','');carregarHistorico();" class="menuUsuario">
             <section class="sebreporLi"> Meus Pedidos  </section>
              <span>Meus Pedidos </span>         
         </li>
         <li onclick="carregar('#areaDados','produtos','produtosVenda','');" class="menuUsuario">
             <section class="sebreporLi"> Comprar </section>
              <span>Comprar</span>
          </li>                          
          <li onclick="logout();" class="menuUsuario">
           <section class="sebreporLi"> Logout </section>          
             <span>Logout</span>
         </li>
      </ul>
     </div>
    </div>
    <div class="col-md-8" id="areaDados"></div>
  </div>
 </div>
</body>
</html>