$(document).ready(function()
{

		$('.datepicker').pickadate({
		  weekdaysShort: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
		  weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
		  monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre',
		  'Noviembre', 'Diciembre'],
		  monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct',
		  'Nov', 'Dic'],
		  showMonthsShort: true,
		  formatSubmit: 'dd-mm-yyyy',
		  close: 'Cancelar',
		  clear: 'Limpiar',
		  today: 'Hoy'
		})


	$('#btn-diario').click(function(e){ /// para el formulario
		$("#form-diario").hide();
		MuestraLoader();
		e.preventDefault();
		$.ajax({
			url: "application/src/routes.php?op=125",
			method: "POST",
			data: $("#form-diario").serialize(),
			success: function(data){
				$("#contenido").html(data);
				$("#form-diario").trigger("reset");
				$("#form-diario").show();
				EscondeLoader();
			}
		})
	})
	
	

	$('#btn-mensual').click(function(e){ /// ventas mensual
	e.preventDefault();
	$.ajax({
			url: "application/src/routes.php?op=126",
			method: "POST",
			data: $("#form-mensual").serialize(),
			beforeSend: function () {
				$('#btn-mensual').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...').addClass('disabled');
	        },
			success: function(data){
				$('#btn-mensual').html('Mostrar Datos').removeClass('disabled');	      
				$("#form-mensual").trigger("reset");
				$("#contenido").html(data);	
			}
		})
	});
    


	$('#btn-cortes').click(function(e){ /// historial de cortes
	e.preventDefault();
	$.ajax({
			url: "application/src/routes.php?op=127",
			method: "POST",
			data: $("#form-cortes").serialize(),
			beforeSend: function () {
				$('#btn-cortes').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...').addClass('disabled');
	        },
			success: function(data){
				$('#btn-cortes').html('Mostrar Datos').removeClass('disabled');	      
				$("#form-cortes").trigger("reset");
				$("#contenido").html(data);	
			}
		})
	});




	$('#btn-utilidades').click(function(e){ /// historial de utilidades
	e.preventDefault();
	$.ajax({
			url: "application/src/routes.php?op=121",
			method: "POST",
			data: $("#form-utilidades").serialize(),
			beforeSend: function () {
				$('#btn-utilidades').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...').addClass('disabled');
	        },
			success: function(data){
				$('#btn-utilidades').html('Mostrar Datos').removeClass('disabled');	      
				$("#form-utilidades").trigger("reset");
				$("#contenido").html(data);	
			}
		})
	});







/////////////////////////////////
	$('#btn-gdiario').click(function(e){ /// para el formulario
		$("#form-gdiario").hide();
		MuestraLoader();
		e.preventDefault();
		$.ajax({
			url: "application/src/routes.php?op=128",
			method: "POST",
			data: $("#form-gdiario").serialize(),
			success: function(data){
				$("#contenido").html(data);
				$("#form-gdiario").trigger("reset");
				$("#form-gdiario").show();
				EscondeLoader();
			}
		})
	})
	
	


	$('#btn-gmensual').click(function(e){ /// gastos mensual 
	e.preventDefault();
	$.ajax({
			url: "application/src/routes.php?op=129",
			method: "POST",
			data: $("#form-gmensual").serialize(),
			beforeSend: function () {
				$('#btn-gmensual').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...').addClass('disabled');
	        },
			success: function(data){
				$('#btn-gmensual').html('Mostrar Datos').removeClass('disabled');	      
				$("#form-gmensual").trigger("reset");
				$("#contenido").html(data);	
			}
		})
	});
    

////////////////////////////////////////////////////


	$('#btn-fechas').click(function(e){ /// para el formulario
		$("#form-fechas").hide();
		MuestraLoader();
		e.preventDefault();
		$.ajax({
			url: "application/src/routes.php?op=75",
			method: "POST",
			data: $("#form-fechas").serialize(),
			success: function(data){
				$("#contenido").html(data);
				$("#form-fechas").trigger("reset");
				$("#form-fechas").show();
				EscondeLoader();
			}
		})
	})


	$('#btn-inout').click(function(e){ /// para el formulario
		$("#form-inout").hide();
		MuestraLoader();
		e.preventDefault();
		$.ajax({
			url: "application/src/routes.php?op=76",
			method: "POST",
			data: $("#form-inout").serialize(),
			success: function(data){
				$("#contenido").html(data);
				$("#form-inout").trigger("reset");
				$("#form-inout").show();
				EscondeLoader();
			}
		})
	})
	



// quita el loader
	EscondeLoader();
	function EscondeLoader(){
		$("#loaderx").hide();
	}

// muestra loader
	function MuestraLoader(){
		$("#loaderx").show();
	}


////////////consolidado
	$('#btn-cdiario').click(function(e){ /// para el formulario
		$("#form-cdiario").hide();
		MuestraLoader();
		e.preventDefault();
		$.ajax({
			url: "application/src/routes.php?op=124",
			method: "POST",
			data: $("#form-cdiario").serialize(),
			success: function(data){
				$("#contenido").html(data);
				$("#form-cdiario").trigger("reset");
				$("#form-cdiario").show();
			}
		})
	})





	$('#btn-descuentos').click(function(e){ /// para el formulario
		$("#form-descuentos").hide();
		MuestraLoader();
		e.preventDefault();
		$.ajax({
			url: "application/src/routes.php?op=123",
			method: "POST",
			data: $("#form-descuentos").serialize(),
			success: function(data){
				$("#contenido").html(data);
				$("#form-descuentos").trigger("reset");
				$("#form-descuentos").show();
				EscondeLoader();
			}
		})
	})
	






	$('#btn-venta').click(function(e){ /// para el formulario
		$("#form-venta").hide();
		MuestraLoader();
		e.preventDefault();
		$.ajax({
			url: "application/src/routes.php?op=132",
			method: "POST",
			data: $("#form-venta").serialize(),
			success: function(data){
				$("#contenido").html(data);
				$("#form-venta").trigger("reset");
				$("#form-venta").show();
				EscondeLoader();
			}
		})
	})
	


	$('#btn-cortez').click(function(e){ /// cortz mensual
	e.preventDefault();
	$.ajax({
			url: "application/src/routes.php?op=112",
			method: "POST",
			data: $("#form-cortez").serialize(),
			beforeSend: function () {
				$('#btn-cortez').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...').addClass('disabled');
	        },
			success: function(data){
				$('#btn-cortez').html('Mostrar Datos').removeClass('disabled');	      
				$("#form-cortez").trigger("reset");
				$("#contenido").html(data);	
			}
		})
	});
    
    $("body").on("click","#imprimir_cortez",function(){ // corte por fecha
    	var fecha = $(this).attr('fecha');
        var dataString = 'op=113z&fecha=' + fecha;

        $.ajax({
            type: "POST",
            url: "application/src/routes.php",
            data: dataString,
            beforeSend: function () {
               $("#msjimprimir").html('<div class="row justify-content-md-center" ><img src="assets/img/load.gif" alt=""></div>');
            },
            success: function(data) {           
                $("#msjimprimir").html(data); 
            }
        });
    });       

    $("body").on("click","#imprimir_corte",function(){ // corte por hash
    	var hash = $(this).attr('hash');
        var dataString = 'op=113&hash=' + hash;

        $.ajax({
            type: "POST",
            url: "application/src/routes.php",
            data: dataString,
            beforeSend: function () {
               $("#msjimprimir").html('<div class="row justify-content-md-center" ><img src="assets/img/load.gif" alt=""></div>');
            },
            success: function(data) {           
                $("#msjimprimir").html(data); 
            }
        });
    });       











	$('#btn-prosearch').click(function(e){ /// movimientos de producto
	e.preventDefault();
	$.ajax({
			url: "application/src/routes.php?op=133",
			method: "POST",
			data: $("#form-prosearch").serialize(),
			beforeSend: function () {
				$('#btn-prosearch').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...').addClass('disabled');
	        },
			success: function(data){
				$('#btn-prosearch').html('Mostrar Datos').removeClass('disabled');	      
				$("#form-prosearch").trigger("reset");
				$("#contenido").html(data);	
			}
		})
	});








	$('#btn-rmensual').click(function(e){ /// gastos mensual 
	e.preventDefault();
	$.ajax({
			url: "application/src/routes.php?op=134",
			method: "POST",
			data: $("#form-rmensual").serialize(),
			beforeSend: function () {
				$('#btn-rmensual').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...').addClass('disabled');
	        },
			success: function(data){
				$('#btn-rmensual').html('Mostrar Datos').removeClass('disabled');	      
				$("#form-rmensual").trigger("reset");
				$("#contenido").html(data);	
			}
		})
	});
    



	$('#btn-ventasxuser').click(function(e){ /// gastos mensual 
		e.preventDefault();
		$.ajax({
				url: "application/src/routes.php?op=145",
				method: "POST",
				data: $("#form-ventasxuser").serialize(),
				beforeSend: function () {
					$('#btn-ventasxuser').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...').addClass('disabled');
				},
				success: function(data){
					$('#btn-ventasxuser').html('Mostrar Datos').removeClass('disabled');	      
					$("#form-ventasxuser").trigger("reset");
					$("#contenido").html(data);	
				}
			})
		});



		$('#btn-envio').click(function(e){ /// para el formulario
			$("#form-envio").hide();
			MuestraLoader();
			e.preventDefault();
			$.ajax({
				url: "application/src/routes.php?op=137",
				method: "POST",
				data: $("#form-envio").serialize(),
				success: function(data){
					$("#contenido").html(data);
					$("#form-envio").trigger("reset");
					$("#form-envio").show();
					EscondeLoader();
				}
			})
		})
	
		


});