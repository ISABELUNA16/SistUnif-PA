<!DOCTYPE HTML>

<head>
	<title>Nuevo Pedido</title>
	<meta charset="utf-8">
	<link href="views/css/font-awesome.css" rel="stylesheet">
	<link href="views/css/metroresponsive.css" rel="stylesheet">
	<link href="views/css/menu3.css" rel="stylesheet">
	
	<script src="views/js/jquery-2.1.3.min.js"></script>
    <script src="views/js/metro.js"></script>

	</head>
<body>
<div class="container">
	<header>
		<div class="cabecera">
		    
			<button class="btn btnNuevo-disabled" id="nuevopedido" name="nuevopedido" onclick="location.href='?action=nuevo'">
				<span class="fuente fa fa-file-o"></span>
				<br>
				<br>
				Nuevo
			</button>
			<button class="btn btnBuscar" id="buscarpedido" name="buscarpedido" onclick="location.href='?action=buscar'">
				<span class="fuente fa fa-search"></span>
				<br>
				<br>
				Buscar
			</button>
			<button class="btn btnSeguimiento" id="seguimientopedido" name="seguimientopedido" onclick="location.href='?action=seguimiento'">
				<span class="fuente fa fa-exchange"></span>
				<br>
				<br>
				Seguimiento
			</button>
			<button class="btn btnReporte" id="reportepedido" name="reportepedido" onclick="location.href='?action=reporte'">
				<span class="fuente fa fa-file-text"></span>
				<br>
				<br>
				Reporte
			</button>
			<button class="btn btnSalir" id="salir" name="salir" onclick="location.href='?action=principal'">
				<span class="fuente fa fa-sign-out"></span>
				<br>
				<br>
				Salir
			</button>
		</div>
	</header>
	<section>
	
	<form action=""	method="POST">
		<div class="formnuevo">	
			<div class="usuario">
		   		<b>{$cargo} :</b> {$nombre}
		    </div>
			<div class="headnuevo">
					<h1>Búsqueda</h1>

					<input type="radio" name="codigoalumno" id="codigoalumno" value="" /> <label>Cod. Alumno</label>
					<input type="radio" name="nombrealumno" id="nombrealumno" value="" > <label>Nombre Alumno</label>
					<input type="text" name="busqueda" id="busqueda" class="cajatext"/>
					<button name="btnbuscar" id="btnbuscar" ><span class="fa fa-search"></span>	</button>
			</div>
			<div class="bodynuevo">
				<div class="datos">
					<div class="datosalumnos">
						<br>
						<label>Alumno </label><input type="" name="" class="cajatext" disabled="disabled"><br>
						<label>Código </label><input type="" name="" class="cajatext" disabled="disabled"><br>
						<label>Carrea </label><input type="" name="" class="cajatext" disabled="disabled"><br>
						<label>Sexo   </label><input type="" name="" class="cajatext" disabled="disabled"><br>
					</div>
					<div class="datosalumnos2">
						<label>E-mail  </label><input type="" name="" class="cajatext" disabled="disabled"><br>
						<label>Teléfono   </label><input type="" name="" class="cajatext" disabled="disabled"><br>
						<label>Fecha de Matrícula  </label><input type="" class="cajatext" name="" disabled="disabled"><br>
					</div>
				</div>
					
					<div class="opcionesfecha">	
						<label>Fecha de Pedido </label><input type="date" name="">	
						<label>Fecha de Entrega </label><input type="date" name="">	
						<input type="radio" name="" id="" value="" /> <label>Pack Masculino</label>
						<input type="radio" name="" id="" value="" /> <label>Pack Femenino</label>	
					</div>
					<div class="part4">
						<table class="tablanuevo">
								<tr>
									<th>Descripción</th>
									<th>Cantidad</th>
									<th>Talla</th>
									<th>Proveedor</th>
								</tr>
								{$registro}														
						</table>	
					</div>
					<div class="espacio"></div>

					<div class="observaciones">
					<h1>Observaciones</h1>	
						<textarea rows="8" cols="186"> </textarea>
					</div>
			</div>
			<div class="footernuevo">

				<button class="opciones" name="btnguardar" id="btnguardar" ><span class="guardar fa fa-floppy-o"></span></button>
				<button class="opciones" name="btncancelar" id="btnancelar" ><span class="fa fa-ban"></span>	</button>
				<button class="opciones" name="btnimprimir" id="btnimprimir" ><span class="fa fa-print"></span>	</button>	
			
			</div>
		</div>
	</form>	
	</section>
	<footer>
		
	</footer>
</div>
</body>
</html>
