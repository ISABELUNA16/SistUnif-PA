<!DOCTYPE html>
<html>
	<head>
		<title>Sky Forms</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">


		<script src="views/js/jquery.min.js"></script>
		<script src="views/js/jquery-ui.min.js"></script>
		<script src="views/js/notify.js"></script>
	</head>
	<script type="text/javascript">

		function consultar(){
			var codigo = document.getElementById("buscar").value;

	        if (codigo.length == 0) {
	            $.Notify({
	                caption: "Error:",
	                content: "Debe de ingresar el codigo del alumno.",
	                type: "alert"
	            });
	            document.getElementById("buscar").focus();
	            return;
	        }
	        var param = { 
                "action": "ConsultarAlumnos",
                "codigo": codigo
            };
            $.ajax({
                type: "POST",
                url: "controllers/BL/bl.alumnos.php",
                dataType: 'JSON',
                data: param,
                success: function(data)
                {
                    /*
                    for (var c = 0; c < data.length; c++) {
                        data[c].titulo;
                    }
                    */
                    
                    if (data.aaData.length>0) {
                        document.getElementById("codigo").value = data.aaData[0]['codigo'];
                        document.getElementById("nombre").value = data.aaData[0]['alumno'];
                        document.getElementById("genero").value=data.aaData[0]['genero'];
                    }else{
                        document.getElementById("codigo").value = '';
                        document.getElementById("nombre").value = '';
                        document.getElementById("genero").value = '';
                    }
                }
            });         
		}
	</script>
	<body class="bg-blue">
		<form action="" method="POST" class="sky-form">
			<fieldset>
				<section>
					<input type="text" id="buscar" name="buscar" placeholder="Ingrese código del alumno">
					<button type="button" OnClick="consultar();">Buscar</button>
				</section>
				<br>
				<section >
					<label > 
					<i class="icon-append icon-users"></i>
					<input id="codigo" name="codigo" type="text" placeholder="Código del Alumno" disabled>
					<br>
					<input id="nombre" name="nombre" type="text" placeholder="Nombre del Alumno" disabled>
					<br>
					<input id="carrera" name="carrera" type="text" placeholder="Carrera Profesional" disabled>
					<br>
					<input id="genero" name="genero" type="text" placeholder="Sexo" disabled>
					</label>
				</section>

				<section >
					<label class="input">
					<br>
					<input id="email" name="email" type="text" placeholder="E-mail" disabled>
					<br>
					<input id="telefono" name="telefono" type="text" placeholder="Teléfono" disabled>	
					<br>
					<input id="matricula" name="matricula" type="text" placeholder="Fecha de Matrícula" disabled>
					</label>
				</section>
				<br>
				<section>
				<input  type="date" id="fpedido" name="fpedido" placeholder="Fecha de Pedido">
				<input type="date" name="fentrega" id="fentrega" placeholder="Fecha de Entrega">
				</section>
				<br>
				<section>
					<label>
					<input type="radio" name="packmasculino">
					<i></i>Pack Masculino</label>
					<label>
					<input type="radio" name="packfemenino">
					<i></i>Pack Femenino
					</label>
				</section>
			</fieldset>
			<fieldset>
				<table border="1">
					<tr>
						<th>Descripión</th>
						<th>Cantidad</th>
						<th>Talla</th>
						<th>Proveedor</th>
						
						
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</fieldset>
			<br>
			 <footer>
			  	   <button type="submit"> Guardar</button>
			       <button type="submit"> Regresar</button>
			 </footer>
		</form>
	</body>
  	
</html>
