function carregar(conteudo,pasta,pagina,operacao)
{
	/* Função para carregar paginas dentro de uma div escolhida
	   Conteúdo = id de onde vai ser carregado a pg dentro
	   Pasta = pasta da pagina
	   Pagina = pagina sem especificar o tipo (php,html,etc..)
	   Tipo = caso necesside fazer alguma operação extra
	*/
	$("#carroselPrincipal").hide();
	var tipo ='';
	
	if(operacao==1)
	{	
		window.location.href = pagina+'.php';
	}else if(operacao==2)
	{
			setTimeout(function(){
				$("#idUser").hide();
			}, 10);
		
	}else if(operacao==3)
	{
			var tipo = '#acai';
			carregarIngredient();
	}else if(operacao==4)
	{
			var tipo = '#cupuacu';
			carregarIngredient();
	}else if(operacao==5)
	{
			var tipo = '#acaiCupuacu';
			carregarIngredient();
	}
	$(conteudo).load('paginas/'+pasta+'/'+pagina+'.php '+tipo);

}
function carregarIngredient(){
 /*
	Função para trazer do banco os ingredientes e adicionar em uma tabela
 */
	$.ajax({
		type: 'post',
		url:'./app/construtor/constrIngredientes.php',
		data:{op:1},
		success: function(retorno){
			//alert(retorno);
			setTimeout(function(){
				$("#dadosDosIngredientes1").html(retorno);
				$("#dadosDosIngredientes2").html(retorno);
				$("#dadosDosIngredientes3").html(retorno);},13);
		}

	});
}

function carregarHistorico(){
 /*
	Função para trazer do banco os pedidos já feito e adicionar em uma tabela
 */	
	var id_user = $("#idUsuarioHist").text();
	var id_usuario = parseInt(id_user);
	$.ajax({
		type: 'post',
		url:'./app/construtor/constrPedido.php',
		data:{op:3, id_usuario: id_usuario},
		success: function(retorno){
			alert(retorno);
			setTimeout(function(){
				$("#historicoTab").html(retorno);},13)
		}

	});
}


function SubmeterCadastro()
{	
	/*
	 Cadastro de usuário	
	*/

	var nome = $("#validationServer01").val();
	var sNome = $("#validationServer02").val();
	var email1 = $("#validationServer03").val();
	var email2 = $("#validationServer04").val();
	var tel = $("#validationServer05").val();
	var senha = $.md5($("#validationServer06").val());
	var checado = 0;
	var op =1;
	if($("#invalidCheck3").is(':checked') == true)
	{
	 checado = 1;
	}
	else
	{
		$.alert({
		    title: '',
		    content: 'Aceite os termos de uso para continuar',
		});
	}

	if(email1 === email2 && email1 != '')
	{
		$("#validationServer03").removeClass( "is-invalid" );
		$("#validationServer04").removeClass( "is-invalid" );
		setTimeout(function(){
			$("#validationServer03").addClass( "is-valid" );
			$("#validationServer04").addClass( "is-valid" );
			}, 100);
		var email =1;

	}
	else
	{
		$("#validationServer03").removeClass( "is-valid" );
		$("#validationServer04").removeClass( "is-valid" );
		setTimeout(function(){
			$("#validationServer03").addClass( "is-invalid" );
			$("#validationServer04").addClass( "is-invalid" );
			}, 100);
		var email =0;
					$.confirm({
    		title: 'Ops Ocorreu um erro!',
    		content: 'Verifique os campos em vermelho',
			type: 'red',
			typeAnimated: true,    
   			autoClose: 'fechar|8000',
   			 buttons: {
       			  fechar: {
            	    text: 'Fechando em:',
            	btnClass: 'btn-red'
        		}
    		  }
		  });
	}


	if(nome && sNome && email1 && email2 && tel && senha !== '' && checado == 1 && email ==1 )
	{
		$.ajax({
			type: 'post',
			data:{nome: nome, sobreNome: sNome, email: email1, tel: tel, senha: senha, op:op},
			url: './app/construtor/constrUsuario.php',
			success: function(retorno)
			{ 
				if(retorno == 1)
				{
						$.confirm({
						    title: 'Cadastrado com Sucesso!',
						    content: 'Obrigado por realizar seu cadastro',
						    type: 'green',
						    typeAnimated: true,
						    autoClose: 'confirma|8000',
						    buttons: {
						        confirma: {
						            text: 'Ok',
						            btnClass: 'btn-green',
						            action: function(){
						            }
						        }
						    }
						}); 
				}else{
						$.confirm({
						    title: 'Ops aconteceu um erro!',
						    content: 'Cadastro não foi realizado, tente novamente mais tarde <br>'+'Erro:'+retorno,
						    type: 'red',
						    typeAnimated: true,
						    autoClose: 'sair|8000',
						    buttons: {
						        sair: {
						            text: 'OK',
						            btnClass: 'btn-red',
						            action: function(){
						            }
						        }
						    }
						});						
				}
			},
			error: function(retorno)
			{	
						$.confirm({
						    title: 'Ops aconteceu um erro!',
						    content: 'Cadastro não foi realizado, tente novamente mais tarde <br>'+'Erro:'+retorno,
						    type: 'red',
						    typeAnimated: true,
						    autoClose: 'sair|8000',
						    buttons: {
						        sair: {
						            text: 'OK',
						            btnClass: 'btn-red',
						            action: function(){
						            }
						        }
						    }
						});			
			}
		});
	}
	else
	{
		if(nome == '')
		{
			$("#validationServer01").addClass( "is-invalid" );
			var submit = 0;
		}else{
			$("#validationServer01").removeClass( "is-invalid" );
			var submit = 1;
		}
		if(sNome == '')
		{
			$("#validationServer02").addClass( "is-invalid" );
			var submit = 0;	
		}else{
			$("#validationServer02").removeClass( "is-invalid" );
			var submit = 1;
		}
		if(tel == '')
		{
			$("#validationServer05").addClass( "is-invalid" );
			var submit = 0;
		}else{
			$("#validationServer05").removeClass( "is-invalid" );
			var submit = 1;
		}
		if(cel == '')
		{
			$("#validationServer06").addClass( "is-invalid" );
			var submit = 0;
		}else{
			$("#validationServer06").removeClass( "is-invalid" );
			var submit = 1;
		}
		if(submit == 0)
		{
			$.confirm({
    		title: 'Ops Ocorreu um erro!',
    		content: 'Verifique os campos em vermelho',
			type: 'red',
			typeAnimated: true,    
   			autoClose: 'fechar|8000',
   			 buttons: {
       			  fechar: {
            	    text: 'Fechando em:',
            	btnClass: 'btn-red'
        		}
    		  }
		  });
		}	
	}
}
function termsUso()
{
	/* 
		Exibir um alerta de termo de uso
	*/
	$.alert({
	title: '',	
    content: '<p> Este Projeto foi desenvolvido para fins de portifólio.</p>'+
    		 '<p> Desenvolvido por David Alves</p>'+
     		 '<p> Telefone: (19)9 8325-5002</p>'
     	   });
}

function logar()
{
	/*
	funcção para fazer login no sistema
	
	*/
	var email = $("#emailLogin").val();
	var senha = $.md5($("#senhaLogin").val());
	if(email ==''|| senha == '' )
	{
			$.confirm({
    		title: 'Ops Ocorreu um erro!',
    		content: 'Dados invalidos',
			type: 'red',
			typeAnimated: true,    
   			autoClose: 'fechar|8000',
   			 buttons: {
       			  fechar: {
            	    text: 'Fechando em:',
            	btnClass: 'btn-red'
        		}
    		  }
		  });
			setTimeout(function(){
				carregar('#conteudoCentral','areaUsuario','pgLogin','');
			}, 8010);	
	}else{

		$.ajax({
			type:'post',
			data: {email:email,senha:senha},
			url:'./app/construtor/login.php',
			success: function(retorno){
				
				if(retorno ==1)
				{
					carregar('#conteudoCentral','areaUsuario','minhaArea','');
				}else{
					$.confirm({
				    	title: 'Ops Ocorreu um erro!',
				    	content: 'Verifique seus dados de login e tente novamte',
						type: 'red',
						typeAnimated: true,    
				   		autoClose: 'fechar|8000',
				   		 buttons: {
				       	  fechar: {
				           			 text: 'Fechando em:',
				          			tnClass: 'btn-red',
				          			action: function(){
				          				carregar('#conteudoCentral','areaUsuario','pgLogin','');

				          			}
				        		}
				    		  }
						  });	
						setTimeout(function(){
							carregar('#conteudoCentral','areaUsuario','pgLogin','');
						}, 8000);
				}

			},
			error: function(retorno){}

		});

	}

}
function logout()
{
	/*
	Função para deslogar do sistema
	*/
	$.ajax({
			type: 'post',
			data:{},
			url:'./app/construtor/logout.php',
			success: function(retorno){
				
				carregar('#conteudoCentral','areaUsuario','pgLogin','');
			},
			error: function(retorno){

			}
		});
}

function modalEdt(){
	/*
		Função para carregar os dados do usuário  na tela de edição
	*/
	var name  = $("#exibNome").text();
	var sname = $("#exibSobrenome").text();
	var email = $("#exibeEmail").text();
	var tel   = $("#exibTel").text();
	/* Removendo espaços indesejaveis nos campos */
	 $("#formularioEdtUser #validationServer01").val(name.trim());
	 $("#formularioEdtUser #validationServer02").val(sname.trim());
	 $("#formularioEdtUser #validationServer03").val(email.trim());
	 $("#formularioEdtUser #validationServer04").val(email.trim());
	 $("#formularioEdtUser #validationServer05").val(tel.trim());


}

function edtUser(){
	/*
	 Editar de usuário	
	*/
	var nome = $("#formularioEdtUser #validationServer01").val();
	var sNome = $("#formularioEdtUser #validationServer02").val();
	var email = $("#formularioEdtUser #validationServer03").val();
	var tel = $("#formularioEdtUser #validationServer05").val();
	var senha = $.md5($("#formularioEdtUser #validationServer06").val());
	var id =$("#idUser").text();
	var op =3; 
	if(nome && sNome && tel && senha && email !== ''  )
	{
		$.ajax({
			type: 'post',
			data:{id:id, nome: nome, sobreNome: sNome, email: email, tel: tel, senha: senha, op:op},
			url: './app/construtor/constrUsuario.php',
			success: function(retorno)
			{ 
				if(retorno == 1)
				{
					
						$.confirm({
						    title: 'Editado com Sucesso!',
						    content: 'Faça login novamente para validar as novas informações',
						    type: 'green',
						    typeAnimated: true,
						    autoClose: 'confirma|8000',
						    buttons: {
						        confirma: {
						            text: 'Ok',
						            btnClass: 'btn-green'
						        }
						    }
						}); 
				}else{
						$.confirm({
						    title: 'Ops aconteceu um erro!',
						    content: 'Cadastro não foi realizado, tente novamente mais tarde <br>'+'Erro:'+retorno,
						    type: 'red',
						    typeAnimated: true,
						    autoClose: 'sair|8000',
						    buttons: {
						        sair: {
						            text: 'OK',
						            btnClass: 'btn-red',
						            action: function(){
						            }
						        }
						    }
						});						
				}
			},
			error: function(retorno)
			{	
						$.confirm({
						    title: 'Ops aconteceu um erro!',
						    content: 'Cadastro não foi realizado, tente novamente mais tarde <br>'+'Erro:'+retorno,
						    type: 'red',
						    typeAnimated: true,
						    autoClose: 'sair|8000',
						    buttons: {
						        sair: {
						            text: 'OK',
						            btnClass: 'btn-red',
						            action: function(){
						            }
						        }
						    }
						});			
			}
		});
	}
	else
	{
		if(nome == '')
		{
			$("#formularioEdtUser #validationServer01").addClass( "is-invalid" );
			var submit = 0;
		}else{
			$("#formularioEdtUser #validationServer01").removeClass( "is-invalid" );
			var submit = 1;
		}
		if(sNome == '')
		{
			$("#formularioEdtUser #validationServer02").addClass( "is-invalid" );
			var submit = 0;	
		}else{
			$("#formularioEdtUser #validationServer02").removeClass( "is-invalid" );
			var submit = 1;
		}
		if(tel == '')
		{
			$("#formularioEdtUser #validationServer05").addClass( "is-invalid" );
			var submit = 0;
		}else{
			$("#formularioEdtUser #validationServer05").removeClass( "is-invalid" );
			var submit = 1;
		}
		if(senha == '')
		{
			$("#formularioEdtUser #validationServer06").addClass( "is-invalid" );
			var submit = 0;
		}else{
			$("#formularioEdtUser #validationServer06").removeClass( "is-invalid" );
			var submit = 1;
		}
		if(email== '')
		{
			$("#formularioEdtUser #validationServer03").removeClass( "is-invalid" );
		}
		else
		{
				$("#formularioEdtUser #validationServer03").addClass( "is-valid" );
		}		
		if(submit == 0)
		{
			$.confirm({
    		title: 'Ops Ocorreu um erro!',
    		content: 'Verifique os campos em vermelho',
			type: 'red',
			typeAnimated: true,    
   			autoClose: 'fechar|8000',
   			 buttons: {
       			  fechar: {
            	    text: 'Fechando em:',
            	btnClass: 'btn-red'
        		}
    		  }
		  });
		}	
	}
}
function addIngredientes(nome,valorIng,id){
/*
	Função para adicionar os ingredientes no pedido
*/	
	
$( "#anexarProd" ).append( "<strong>"+nome+"</strong> <br>" );
   var valor = $("#valorTotal").val();
   var n1=parseFloat(document.getElementById("valorTotal").value);
   var n2=parseFloat(valorIng);
   
   var calculo = eval(n1+n2);
$("#valorTotal").val(calculo);

}
function tamanhoAcai(){
/*
	Função para adicionar o açaí no pedido
*/		

	if($("#acaiP").is(':checked') == true)
	{	 $("#acaiP").prop("checked", true);
		 $("#acaiM").prop("checked", false);
		 $("#acaiG").prop("checked", false);
		 addIngredientes('Açaí P',6,2)

	}else if ($("#acaiM").is(':checked') == true){
		 $("#acaiM").prop("checked", true);
		 $("#acaiP").prop("checked", false);
		 $("#acaiG").prop("checked", false);
		  addIngredientes('Açaí M',9,2)

	}else if ($("#acaiG").is(':checked') == true){
		 $("#acaiG").prop("checked", true);
		 $("#acaiP").prop("checked", false);
		 $("#acaiM").prop("checked", false);
		  addIngredientes('Açaí G',12,2)	
	}
}
function tamanhoCupu(){
	/*
	Função para adicionar o cupuaçu no pedido
*/	

	if($("#cupuP").is(':checked') == true)
	{	 $("#cupuP").prop("checked", true);
		 $("#cupuM").prop("checked", false);
		 $("#cupuG").prop("checked", false);
		 addIngredientes('Cupuaçu P',6,3)

	}else if ($("#cupuM").is(':checked') == true){
		 $("#cupuM").prop("checked", true);
		 $("#cupuP").prop("checked", false);
		 $("#cupuG").prop("checked", false);
		  addIngredientes('Cupuaçu M',9,3)

	}else if ($("#cupuG").is(':checked') == true){
		 $("#cupuG").prop("checked", true);
		 $("#cupuP").prop("checked", false);
		 $("#cupuM").prop("checked", false);
		  addIngredientes('Cupuaçu G',12,3)	
	}
}
function tamanhoAcaiCupu(){
/*
	Função para adicionar o açaí + cupuaçu no pedido
*/		

	if($("#acaiCupuP").is(':checked') == true)
	{	 $("#acaiCupuP").prop("checked", true);
		 $("#acaiCupuM").prop("checked", false);
		 $("#acaiCupuG").prop("checked", false);
		 addIngredientes('Açaí + Cupuaçu P',7,4)

	}else if ($("#acaiCupuM").is(':checked') == true){
		 $("#acaiCupuM").prop("checked", true);
		 $("#acaiCupuP").prop("checked", false);
		 $("#acaiCupuG").prop("checked", false);
		  addIngredientes('Açaí + Cupuaçu M',10,4)

	}else if ($("#acaiCupuG").is(':checked') == true){
		 $("#acaiCupuG").prop("checked", true);
		 $("#acaiCupuP").prop("checked", false);
		 $("#acaiCupuM").prop("checked", false);
		  addIngredientes('Açaí + Cupuaçu G',13,4)	
	}
}

function fecharPedido(){
/*
	Função para realizar  o  pedido e gravar no bd
*/		
	var id_usuario  = $("#idUsr").val();
	var descricao   = $("#anexarProd").text();
	var valorPedido = $("#valorTotal").val();
	$.ajax({
			type:'post',
			url: './app/construtor/constrPedido.php',
			data:{id_usuario:id_usuario, descricao:descricao, valor:valorPedido, op:1},
			success: function(retorno){
									if(retorno == 1)
				{
					
						$.confirm({
						    title: 'Pedido com Sucesso!',
						    content: 'Seu pedidofoi realizado',
						    type: 'green',
						    typeAnimated: true,
						    autoClose: 'confirma|8000',
						    buttons: {
						        confirma: {
						            text: 'Ok',
						            btnClass: 'btn-green'
						        }
						    }
						}); 
				}else{
						$.confirm({
						    title: 'Ops aconteceu um erro!',
						    content: 'Pedido não foi realizado, tente novamente mais tarde',
						    type: 'red',
						    typeAnimated: true,
						    autoClose: 'sair|8000',
						    buttons: {
						        sair: {
						            text: 'OK',
						            btnClass: 'btn-red',
						            action: function(){
						            }
						        }
						    }
						});
					}
				}

	});



}