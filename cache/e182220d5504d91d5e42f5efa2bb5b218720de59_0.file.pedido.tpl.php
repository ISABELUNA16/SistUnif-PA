<?php
/* Smarty version 3.1.30, created on 2017-05-23 22:53:57
  from "C:\wamp\www\sistuniformes-b\sistuniformes\views\templates\pedido.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5924bd85115fd1_88186827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e182220d5504d91d5e42f5efa2bb5b218720de59' => 
    array (
      0 => 'C:\\wamp\\www\\sistuniformes-b\\sistuniformes\\views\\templates\\pedido.tpl',
      1 => 1485061662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5924bd85115fd1_88186827 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Sistema de Uniformes</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="views/css/pedido.css">
		<link rel="stylesheet" href="views/css/notify.css">
		<link rel="stylesheet" href="views/css/font-awesome.css">
		<link rel="stylesheet" href="views/css/forms-pedido.css">
		<link rel="stylesheet" href="views/css/forms-pedido-red.css">
		<link rel="stylesheet" href="views/css/forms-tabla.css">

		<!--<link rel="stylesheet" href="views/css/modal.css">
		<link rel="stylesheet" href="views/css/forms-modal.css">-->
	</head>

	<?php echo '<script'; ?>
 type="text/javascript">
	
	function Imprimir(tipo)
        {
			var ficha   = document.getElementById(tipo);
			var ventimp = window.open(' ','popimpr');

			ventimp.document.write(ficha.innerHTML);
			ventimp.document.close();
			ventimp.print();
			ventimp.close();
        }

		function esNummero(evt)
          {
			var charCode = (evt.which) ? evt.which : event.keyCode

			if (charCode > 31 && (charCode < 48 || charCode > 57))
			{
				return false;
			}
			else
			{
				return true;
			}
        }
		
		function MostrarPrendas(){

			if (data.aaData.length>0){
				if  ( data.aaData[0]['carrera']){

				}
			}


		}
		function ListarPrendas(xIdPack){ 
			/*
			alert(xIdPack);
			*/
			var param = {
                "action": "ListarPrendas",
                "tipo": 4,
                "id": xIdPack,
                "nombre": ''
            };

            $.ajax({
				type: "POST",
                url: "controllers/BL/bl.prendas.php",
                dataType: 'JSON',
                data: param,
                success: function(data)
                {
					var divprenda = '';

					if (data.aaData.length>0)
					{
						divprenda+= '	<table id="tbprenda" name="tbprenda" class="rwd_auto fontsize">'
						divprenda+= '		<thead>'
						divprenda+= '			<tr>'
						divprenda+= '				<th>N°</th>'
						divprenda+= '				<th>Descripción</th>'
						divprenda+= '				<th>Cantidad</th>'
						divprenda+= '				<th>Talla</th>'
						divprenda+= '				<th>Precio</th>'
						divprenda+= '				<th>Observaciones</th>'
						divprenda+= '			</tr>'
						divprenda+= '		</thead>'
						divprenda+= '		<tbody>'

						for(i=0; i<data.aaData.length; i++){
							var cont = i+1;

						if (data.aaData[i]['idpack']!='5'){
							if (data.aaData[i]['estado']=='1')
								{
									divprenda+= '		<tr>'
	                                divprenda+= '		    <td>' + cont + '</td>'
	                                divprenda+= '		    <td>' + data.aaData[i]["descripcion"] + '</td>'
	                                divprenda+= '		    <td contentEditable="true" onkeypress="return esNummero(this);">1</td>'
	                               divprenda+= '		    <td>'
								
									if(data.aaData[i]["talla"]==1)
									{
										divprenda+='		<label class="select">'
										divprenda+= '				<select id="Seleccionartalla' + cont + '" name="Seleccionartalla' + cont + '">'
										divprenda+= '					<option>S</option>'
										divprenda+= '					<option>M</option>'
										divprenda+= '					<option>L</option>'
										divprenda+= '					<option>XL</option>'
										divprenda+= '				</select>'
										divprenda+='		</label>'
									}
									else {
										divprenda+= ''
									}

									divprenda+= '		    </td>'
	                                divprenda+= '		    <td> S.' + data.aaData[i]["precio"].toFixed(2) + '</td>'
	                                  divprenda+= '		    <td contentEditable="true" > </td>'
	                            /*    divprenda+= '		    <td><input type="hidden" id="comentario' + cont + '" name="comentario' + cont + '"></td>'*/
	                                divprenda+= 		'</tr>'
								}
						
							}else{
								if (data.aaData[i]['idpack']=='5'){


								}


						}
					}

						divprenda+= '		</tbody>'
						divprenda+= '	</table>'

						$('#tablareg').html(divprenda);
					}
                }
            });
		}

		function listar(){
			var param = {
                "action": "ListarPack",
                "tipo": 1,
                "id": 0,
                "nombre": ''
            };

            $.ajax({
				type: "POST",
        		//contentType: "charset=utf-8",
                url: "controllers/BL/bl.pack.php",
                dataType: 'JSON',
                data: param,
                success: function(data)
                {
					var divpack = '';

					if (data.aaData.length>0)
					{
						for(i=0; i<data.aaData.length; i++){
							/*alert(data.aaData[i]["pack"]);*/
							if (data.aaData[i]['estado']=='1')
							{
								divpack+= '<section class="col col-3">'
								divpack+= '	<label>'
								divpack+= '		<h4>' + data.aaData[i]["pack"] + '</h4>'
								divpack+= '		<input type="radio" id="pack"  name="pack" onclick="javascript: ListarPrendas(' + data.aaData[i]["id"] + ')">'
								divpack+= '	</label>'
								divpack+= '</section>'
							}





						}

						$('#ctlpack').html(divpack);
					}
                }
            });
		}
		
		function consultar(){
			var codigo = document.getElementById("bcodigo").value;
			var nombre = document.getElementById("bnombre").value;

			if (codigo.length == 0 && nombre.length == 0) {
	            $.Notify({
	                caption: "Error:",
	                content: "Debe de ingresar el código o datos del alumno.",
	                type: "alert"
	            });
	            document.getElementById("codigo").focus();
	            return;
	        }

			var param = {
                "action": "ConsultarAlumnos",
                "codigo": codigo,
                "nombre": nombre
            };

            $.ajax({
                type: "POST",
                url: "controllers/BL/bl.alumno.php",
                dataType: 'JSON',
                data: param,
                success: function(data)
                {
					if (data.aaData.length>0)
					{
                    	if (data.aaData[0]['estado']=='1')
                    	{
                       		 data.aaData[0]['estado']='Activo';
                    	}
						else
						{
							data.aaData[0]['estado']='Inactivo';
	                    };

						document.getElementById("bcodigo").value = '';
						document.getElementById("bnombre").value = '';
                        document.getElementById("codigo").value = data.aaData[0]['codigo'];
                        document.getElementById("alumno").value = data.aaData[0]['alumno'];
                        document.getElementById("carrera").value = data.aaData[0]['carrera'];
                        document.getElementById("especialidad").value = data.aaData[0]['especialidad'];
                        document.getElementById("matricula").value = data.aaData[0]['matricula'];
                        document.getElementById("email").value=data.aaData[0]['email'];
                        document.getElementById("genero").value=data.aaData[0]['genero'];
                        document.getElementById("estado").value = data.aaData[0]['estado'];
                    }else{
						document.getElementById("bcodigo").value = '';
						document.getElementById("bnombre").value = '';
						document.getElementById("codigo").value = '';
						document.getElementById("alumno").value = '';
						document.getElementById("carrera").value = '';
						document.getElementById("especialidad").value = '';
						document.getElementById("matricula").value = '';
						document.getElementById("email").value='';
						document.getElementById("genero").value='';
                    }
                }
            });
		}

		function Mostrar(){
			
			var tabla = document.getElementById('tbprenda');
			var fila ="";
			var options = new Array();
			var i;

			for (i=0; i < (tabla.rows.length - 1); i++){
				var ctlNombre = 'Seleccionartalla' + (i+1);

				options[i] = document.getElementById(ctlNombre).value;

				fila   = tabla.rows[i+1].getElementsByTagName("td");

				alert('N°:' + fila[0].innerHTML + ' - Descripción: ' + fila[1].innerHTML + ' - Cantidad: ' + fila[2].innerHTML + ' - Talla: ' + options[i] + ' - Precio: ' + fila[4].innerHTML);
			}
		}
		function mensaje(){
			alert(document.getElementsByTagName("pack").value)
		}

	<?php echo '</script'; ?>
>
	
	<body class="bg-blue" onload="javascript:listar();">
		<div class="body">
			<form action="#" method="POST" class="sky-form">
				<header>
					<div class="opciones">
					<button type="button" class="btn btnNuevo">
						<span class="fuente fa fa-file"></span> <br/><br/>Nuevo
					</button>
					<button type="button" class="btn btnBuscar" >
						<span class="fuente fa fa-search"></span><br/><br/>Buscar
					</button>
					<button type="button" class="btn btnTiendaEl" onclick="javascript:ImprimirTiendasEl('uniformes');" >
						<span class="fuente fa fa-user-secret"></span><br/><br/>Tiendas Él
					</button>
					<button type="button" class="btn btnImprimir" onclick="javascript:Imprimir('uniformes');">
						<span class="fuente fa fa-print"></span><br/><br/>Imprimir
					</button>
					</div>
				</header>
				<fieldset>
					<h4>Búsqueda:</h4><br>
						<div class="row">
							<section class="col col-2">
								<label class="input">
								<i class="icon-append icon-code"></i>
								<input type="text" placeholder="Código" id="bcodigo" name="bcodigo" onkeydown="document.getElementById('bnombre').value='';" autofocus >
							</label>
							</section>

							<section class="col col-8">
								<label class="input">
								<i class="icon-append fa-vcard-o"></i>
								<input type="text" placeholder="Nombre" id="bnombre" name="bnombre" onkeydown="document.getElementById('bcodigo').value='';" >
							</label>
							</section>

							<section class="col col-2">
							    <button style="margin-top: -2px" type="button" class="button" name="buscar" onclick="consultar();"><i class="icon-search"></i> Buscar</button>
							</section>
						</div>
					</fieldset>

					<fieldset>
						<input type="hidden" id="id" name="id">
						<div class="row">
							<section class="col col-2">
								<h4>Código:</h4>
								<label class="input">
									<i class="icon-append icon-code"></i>
										<input type="text" placeholder="Código" id="codigo" name="codigo" disabled>
								</label>
							</section>
							<section class="col col-8">
								<h4>Alumno:</h4>
								<label class="input">
									<i class="icon-append icon-user"></i>
										<input type="text" placeholder="Alumno" id="alumno" name="alumno" disabled>
								</label>
							</section>
							<section class="col col-2">
								<h4>Género:</h4>
								<label class="input">
										<i class="icon-append fa-intersex"></i>
										<input type="text" placeholder="Género" name="genero" id="genero" disabled>
								</label>
							</section>
					   </div>

						<div class="row">
								<section class="col col-6">
									<h4>Carrera:</h4>
										<label class="input">
											<i class="icon-append icon-file"></i>
											<input type="text" placeholder="Carrera" id="carrera" name="carrera" disabled>
										</label>
								</section>
								<section class="col col-6">
									<h4>Especialidad:</h4>
										<label class="input">
											<i class="icon-append icon-file"></i>
											<input type="text" placeholder="Especialidad" id="especialidad" name="especialidad" disabled >
										</label>
							 </section>
						</div>

						<div class="row">
							<section class="col col-5">
								<h4>E-Mail:</h4>
								<label class="input">
								  <i class="icon-append icon-envelope-alt"></i>
								  <input type="email" placeholder="E-mail" id="email" name="email" disabled >
								</label>
							</section>
							<section class="col col-4">
								<h4>Fecha de Matrícula:</h4>
								<label class="input">
									<i class="icon-append icon-calendar"></i>
									<input type="date" id="matricula" name="matricula" disabled >
								</label>
							</section>
							<section class="col col-3">
								<h4>Estado:</h4>
								<label class="input">
									<input type="text" id="estado" name="estado" disabled="">
								</label>
							</section>
						</div>
					</fieldset>

					<fieldset>
						<div class="row">
							<section class="col col-3">
								<h4>Fecha de Pedido</h4>
								<label class="input">
									<i class="icon-append icon-calendar"></i>
									<input type="date" id="pedido" name="pedido" >
								</label>
							</section>
							<section class="col col-3">
								<h4>Fecha de Entrega</h4>
								<label class="input">
									<i class="icon-append icon-calendar"></i>
									<input type="date" id="entrega" name="entrega" >
								</label>
							</section>
							<section  class="col col-3">
								<h4>Estado</h4>
								<label class="select">
									<select>
										<option value="1">Pendiente</option>
										<option value="2">En confección</option>
										<option value="3">Recibido</option>
										<option value="4">Entregado</option>

									</select>
									<i></i>
								</label>
							</section>

							<section class="col col-3">
								<h4>Color</h4>
								<label class="input">
									<i class="icon-append fa-street-view"></i>
									<input type="text" id="color" name="color" value="Azul" disabled >
								</label>
							</section>

						</div>
					</fieldset>
					<fieldset>
						<!--Opciones para  mostrar las prendas por pack de acuerdo a  la carrera   -->
						<center>
							<div class="row" id="ctlpack" name="ctlpack">

							</div>
						</center>
					</fieldset>
					<fieldset>
						<div id="tablareg">
						</div>
					</fieldset>
					<fieldset>
						<div class="">
							<section>
								<input type="hidden" id="itemprenda" name="itemprenda" />
								<h4>Observaciones:</h4>
								<label class="textarea">
									<i class="icon-append icon-comment"></i>
									<textarea rows="5" placeholder="Escriba aquí sus observaciones"></textarea>
								</label>
								<button type="button" class="button" onclick="javascript:Mostrar();">Aplicar comentario</button>
							</section>
						</div>
					</fieldset>
					<footer>
						<button type="button" class="button" onclick="javascript:Mostrar();">Guardar</button>
						<button type="button" class="button" onclick="location.href='?action=uniformes'" >Cancelar</button>
					</footer>
				</form>

			<form action="" method="POST" id="sky-form1" class="sky-form sky-form-modal">
				<fieldset>
					<section>
						<div class="row">
							<label class="label col col-4">Cantidad</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="text" name="cantidad" id="cantidad">
								</label>
							</div>
						</div>
					</section>

					<section>
						<div class="row">
							<label class="label col col-4">Talla</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append fa fa-lock"></i>
									<input type="password" name="password" id="password">
								</label>
								<!--<div class="note"><a href="#">Forgot password?</a></div>-->
							</div>
						</div>
					</section>
				</fieldset>
				<footer>
					<button type="submit" class="button">Log in</button>
					<a href="#" class="button button-secondary modal-closer">Close</a>
				</footer>
			</form>
		</div>
		<div id="uniformes" name="uniformes" class="print Impresion">
	            <p><img src="views/img/logo-profair.png" /> </p>
	            <div class="titulo"><center><b>SOLICITUD DE UNIFORME</b></center></div>
	            <br>
	            <br>
	            <p><b><u>DATOS DEL ALUMNO:</u></b></p>
	            <p>Nombres y Apellidos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; JUAN SARMIENTO AREVALO</p>
	            <p>Teléfono&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; 991-588-248</p>
	            <br>
	            <br>
	            <p><b><u>DATOS DE LA CARRERA:</u></b></p>
	            <p>Carrera&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; PILOTO PRIVADO</p>
	            <p>Fecha de Matrícula&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; 09/08/2016</p>
	            <br>
	            <br>
	            <p><b><u>DATOS DEL UNIFORME:</u></b></p>
	            <p>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; AZUL</p>
	            <p>Tipo de Uniforme&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; Pack Caballero Aviación Comercial</p>
	            <br>
	            <br>
				<p>Firma de Solicitud de Uniformes:</p>
				<div class="firma">FIRMA DEL ALUMNO</div>
	            <br>
	            <br>
				<p>Firma de Entrega de Uniforme:</p>
				<div class="firma">FIRMA DEL ALUMNO</div>
	            <br>
	            <br>
	            <p class="nota">El uniforme se entregará a los 30 dias calendarios, luego de haber cancelado la totalidad y de haber realizado la toma de tallas.</p>
	        </div>

		<?php echo '<script'; ?>
 src="views/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="views/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="views/js/notify.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="views/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="views/js/jquery.modal.js"><?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
