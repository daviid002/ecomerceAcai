<?php 


include('../../acoes.php');

?>

<!DOCTYPE html>
<html>

<body>
<div class="fundo">
	<div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4 " onclick="carregar('#areaDados','produtos','compra','3'); ">
    <div class="card h-100 tipoProduto um" style="">
      <img src="img/acaiPuro.png" class="card-img-top fotoProduto" alt="1">
      <section class="sobrePosicao">
      	<article class="textComprar">
      		<p>Comprar</p>
      		<svg width="1em"style="font-size: 78px" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  				<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
			</svg>
      	</article>
      </section>
      <div class="card-body">
        <h5 class="card-title">Açaí Puro</h5>
        <p class="card-text">O açaí (popular) é uma fruta rica em minerais: cálcio, fósforo e ferro, que combate a anemia.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4"  onclick="carregar('#areaDados','produtos','compra','4')">
    <div class="card h-100 tipoProduto">
      <div  class="card-body ftCupuacu " style="background-image: url(img/cupuacuPuro.png);"></div>
       <section class="sobrePosicao">
      	<article class="textComprar">
      		<p>Comprar</p>
      		<svg width="1em"style="font-size: 78px" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  				<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
			</svg>
      	</article>
      </section>
      <div class="card-body">
        <h5 class="card-title">Cupuaçu Puro</h5>
        <p class="card-text">Cupuaçu rico em carboidratos que ajudam evitar inflamações.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4"  onclick="carregar('#areaDados','produtos','compra','5')">
    <div class="card h-100 tipoProduto tres">
      <div  class="card-body ftCupuacu acai" style="background-image: url(img/acaiCupuacu.png);"></div>
       <section class="sobrePosicao">
      	<article class="textComprar">
      		<p>Comprar</p>
      		<svg width="1em"style="font-size: 78px" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  				<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
			</svg>
      	</article>
      </section>
      <div class="card-body">
        <h5 class="card-title">Açaí + Cupuaçu </h5>
        <p class="card-text">A mistura dos dois em um só copo, uma explosão de sabor e vitaminas.</p>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>