<?php
include('../../acoes.php');


$id_usuario = $_SESSION["ID_USUARIO"];

?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
 <div id="acai"> 
  <input type="text" hidden id="idUsr" value="<?php echo $id_usuario; ?>">
    <div class="row"> 
       <div class="col-md-12"><h1>Açaí </h1></div>
      <div class="col-md-2">
        <p>P<input type="checkbox" id="acaiP" aria-label="Checkbox for following text input" onclick="tamanhoAcai()"> R$ 6,00
      </div>
      <div class="col-md-2">
        <p>M<input type="checkbox" id="acaiM" aria-label="Checkbox for following text input"  onclick="tamanhoAcai()"> R$ 9,00
      </div>
      <div class="col-md-2">
        <p>G<input type="checkbox" id="acaiG" aria-label="Checkbox for following text input"  onclick="tamanhoAcai()"> R$ 12,00
      </div> 
    </div>
    <div class="row">
      <div class="col-md-6">
            <div class="IngredienteScroll">
          	<table class="table">
            <thead>
              <tr>
                <th scope="col">Acompanhamentos</th>
                <th scope="col">preço</th>
                 <th scope="col">Adicionar</th>
              </tr>
            </thead>
            <tbody id="dadosDosIngredientes1">
            </tbody>
          </table>
          </div>
      </div>
      <div class="col-md-6 montarPedido">
        <h5>Pedido</h5>
        <div  class="IngredienteScroll" id="anexarProd"></div>
        <div class="row"><div class="col-md-4"><strong>Total:</strong></div>
          <div class="col-md-4"><input disabled type="text" value="0.0" id="valorTotal" > </div>
          <div class="col-md-4"><a href="#" onclick="fecharPedido()" >Finalizar</a> </div>
        </div>
      </div>
    </div>
 </div>
<div id="cupuacu">
  <input type="text" hidden id="idUsr" value="<?php echo $id_usuario; ?>">
      <div class="row"> 
       <div class="col-md-12"><h1>Cupuacu</h1></div>
      <div class="col-md-2">
        <p>P<input type="checkbox" id="cupuP" aria-label="Checkbox for following text input" onclick="tamanhoCupu()"> R$ 6,00
      </div>
      <div class="col-md-2">
        <p>M<input type="checkbox" id="cupuM" aria-label="Checkbox for following text input"  onclick="tamanhoCupu()"> R$ 9,00
      </div>
      <div class="col-md-2">
        <p>G<input type="checkbox" id="cupuG" aria-label="Checkbox for following text input"  onclick="tamanhoCupu()"> R$ 12,00
      </div> 
    </div>
    <div class="row">
      <div class="col-md-6">
            <div class="IngredienteScroll">
            <table class="table">
            <thead>
              <tr>
                <th scope="col">Acompanhamentos</th>
                <th scope="col">preço</th>
                 <th scope="col">Adicionar</th>
              </tr>
            </thead>
            <tbody id="dadosDosIngredientes2">
            </tbody>
          </table>
          </div>
      </div>
      <div class="col-md-6 montarPedido">
        <h5>Pedido</h5>
        <div  class="IngredienteScroll" id="anexarProd"></div>
        <div class="row"><div class="col-md-4"><strong>Total:</strong></div>
          <div class="col-md-4"><input disabled type="text" value="0.0" id="valorTotal" > </div>
          <div class="col-md-4"><a href="#" onclick="fecharPedido()" >Finalizar</a> </div>
        </div>
      </div>
    </div>
</div>
<div id="acaiCupuacu">
  <input type="text" hidden id="idUsr" value="<?php echo $id_usuario; ?>">
      <div class="row"> 
       <div class="col-md-12"><h1>Açaí + Cupuacu</h1></div>
      <div class="col-md-2">
        <p>P<input type="checkbox" id="acaiCupuP" aria-label="Checkbox for following text input" onclick="tamanhoAcaiCupu()"> R$ 7,00
      </div>
      <div class="col-md-2">
        <p>M<input type="checkbox" id="acaiCupuM" aria-label="Checkbox for following text input"  onclick="tamanhoAcaiCupu()"> R$ 10,00
      </div>
      <div class="col-md-2">
        <p>G<input type="checkbox" id="acaiCupuG" aria-label="Checkbox for following text input"  onclick="tamanhoAcaiCupu()"> R$ 13,00
      </div> 
    </div>
    <div class="row">
      <div class="col-md-6">
            <div class="IngredienteScroll">
            <table class="table">
            <thead>
              <tr>
                <th scope="col">Acompanhamentos</th>
                <th scope="col">preço</th>
                 <th scope="col">Adicionar</th>
              </tr>
            </thead>
            <tbody id="dadosDosIngredientes3">
            </tbody>
          </table>
          </div>
      </div>
      <div class="col-md-6 montarPedido">
        <h5>Pedido</h5>
        <div  class="IngredienteScroll" id="anexarProd"></div>
        <div class="row"><div class="col-md-4"><strong>Total:</strong></div>
          <div class="col-md-4"><input disabled type="text" value="0.0" id="valorTotal" > </div>
          <div class="col-md-4"><a href="#" onclick="fecharPedido()" >Finalizar</a> </div>
        </div>
      </div>
    </div>

</div>

<div class="col-md-2"> <button type="button" class="btn btn-success">Finalizar</button></div> 
</body>
</html>
