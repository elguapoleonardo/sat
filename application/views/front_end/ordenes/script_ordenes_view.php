	
<script> 	
var img='<i class="icon-spinner icon-spin alert-warning bigger-125"></i>'; 
var msjalerta = "";

function agregar_orden()
{


	$.ajax({ 
		url      : 'ordenes/agregar_ordenes', 
		type     : 'post', 
		dataType : 'json', 
		data     : $('#form_agregar_ordenes').serialize(), 
		beforeSend : function(){ 
			alerta( img + ' Espere...' ); 

		}, 
		success : function(data){ 

			alerta(); 
			if( data.type==false){ 
				alerta( data.message, false ); 
			}else{ 
				alerta(img + data.message, true ); 
				setTimeout( function()
					{
						alerta(); 
						/*
						limpiar('agregar');
						$('#agregar_orden').modal('toggle');
						setTimeout( function()
						{
						location.reload();
						}, 20);
						*/
					}, 2000 ); 
			} 
		}, 
		error : function(){ 
			alert('Prueba Error');
			alerta(); dialogo( 'Error', 'Error al enviar los datos.' ); 
		} 
		});
}


function modificar_orden()
{
	$.ajax
	({ 
		url      : 'ordenes/modificar_ordenes', 
		type     : 'post', 
		dataType : 'json', 
		data     : $('#form_modificar_ordenes').serialize(), 
		beforeSend : function()
		{ 
			alerta( img + ' Espere...' ); 
		}, 
		success : function(data)
		{ 
			alerta(); 
			if( data.type==false)
			{ 
				alerta( data.message, false ); 
			}
			else
			{ 
				//error!!!!!!!!!!!!
			} 
		}, 
		error : function()
		{ 

			alerta(img + ' Datos actualizados exitosamente', true ); 
			setTimeout( function()
				{
					$('#msj' + msjalerta).slideToggle(300);
					setTimeout( function()
					{
						$('#msj' + msjalerta).empty();
						/*
						var valor1 = $('#Nombreorden2').val();
						var valor2 = $('#Descripcionorden2').val();
						var valor3 = $('#Idorden2').val();
						var fila = $('.indice_'+ valor3).text();
						oTable1.fnUpdate( valor1, fila, 1 ); // modifica la fila 0 comluna1
						oTable1.fnUpdate( valor2, fila, 2 ); // modifica la fila 0 comluna1
						*/
						$('#modificar_orden').modal('toggle');
						location.reload();
					},300);
				}, 1500 );
		} 
	});
}

function eliminar_orden()
{
	$.ajax({ 
		url      : 'ordenes/eliminar_ordenes', 
		type     : 'post', 
		dataType : 'json', 
		data     : $('#form_eliminar_ordenes').serialize(), 
		beforeSend : function(){ 
			alerta( img + ' Espere...' ); 
		}, 
		success : function(data){ 
			alerta(); 
			if( data.type==false){ 
				alerta( data.message, false ); 
			}else{ 
				alerta(img + ' Datos Eliminados exitosamente', true ); 
				setTimeout( function()
				{
					$('#contenido_eliminar').slideUp(700);
				}, 1000);
				setTimeout( function()
					{
						var valor3 = $('#Idorden3').val();
						var fila = $('.indice_'+ valor3).text();
						oTable1.fnDeleteRow (fila);
						$('#eliminar_orden').modal('toggle');
						limpiar('eliminar');
					}, 2000 ); 
			} 
		}, 
		error : function()
		{ 
			alerta(); dialogo( 'Error', 'Error al enviar los datos.' ); 
		} 
		});
}


function modificar_model(codigo)
{
	var nombre = ($('.nombre_orden_' + codigo ).text());
	var descripcion = ($('.descripcion_orden_' + codigo ).text());
	var id = ($('.id_orden_' + codigo ).text());
	$('#Nombreorden2').val(nombre);
	$('#Descripcionorden2').val(descripcion);
	$('#Idorden2').val(id);
	$('#modificar_orden').modal('show');
}
orden 
function eliminar_model(codigo)
{
	var nombre = ($('.nombre_orden_' + codigo ).text());
	var descripcion = ($('.descripcion_orden_' + codigo ).text());
	var id = ($('.id_orden_' + codigo ).text());
	$('#Nombreorden3').html(nombre);
	$('#Descripcionorden3').html(descripcion);
	$('#Idorden3').val(id);
	$('#contenido_eliminar').show();
	$('#eliminar_orden').modal('show');
}


function cambiar_msjalerta(valor)
{
	msjalerta = valor;
}

function limpiar(form)
{
	$('#form_'+ form +'_ordenes')[0].reset();
	if(form ="eliminar")
	{
		$('#Nombreorden3').html('');
		$('#Descripcionorden3').html('');
	}
	$('#msj' + msjalerta).slideToggle(300);
	setTimeout( function()
	{
		$('#msj' + msjalerta).empty();
	},300);
}

function verificar_estados(accion){ 
	
	if($('#msj' + msjalerta).is(':visible'))
	{
		$('#msj' + msjalerta).slideUp(300);
		setTimeout( function detener()
			{
				if(accion == "agregar")
				{
					agregar_orden();
				}
				else if(accion == "modificar")
				{
					modificar_orden();
				}
				else if(accion == "eliminar")
				{
					eliminar_orden();
				}
			}, 300);
	}

	else
	{
		if(accion == "agregar")
		{
			agregar_orden();
		}
		else if(accion == "modificar")
		{
			modificar_orden();
		}
		else if(accion == "eliminar")
		{
			eliminar_orden();
		}
	} 
};

function dialogo(title ,message)
{ 
	$('.notify').html( message ); 
	$( "#dialogo"+ msjalerta ).dialog({ 
		autoOpen  : true, 
		width     : 400, 
		title     : title, 
		"position": ['middle',30], 
		modal     : true, 
		resizable : false, 
		buttons   : { 
    		"Cerrar": function() { 
        		$(  "#dialogo"+msjalerta ).dialog( "close" ); 
    		} 
		}, 
		open: function(){}, 
		close: function(){} 
	}); 
}; 

function alerta(msj, estado)
{ 
	if( msj == null && estado == null )
		{ 
			$('#msj' + msjalerta).empty(); return; 
		} 
	if( estado == null )
	{ 
		$('#msj' + msjalerta).empty().html('<div class="alert alert-warning">'+ msj +'</div>');
	}
	else if( estado == true )
	{ 

		 	$('#msj' + msjalerta).empty().html('<div class="alert alert-success">'+ msj +'</div>').slideToggle(300); 
	}
	else if ( estado == false )
	{ 
		$('#msj' + msjalerta).empty().html('<div class="alert alert-danger">'+ msj +'</div>').slideToggle(300); 
	} 
} 

	</script> 


		