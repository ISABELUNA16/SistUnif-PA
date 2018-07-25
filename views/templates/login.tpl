<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

        <title>Sistema de Uniformes</title>

		<link rel="stylesheet" href="views/css/login.css">
		<link rel="stylesheet" href="views/css/forms.css">
	</head>
	<body class="bg-blue">
		<div class="body body-s">
            {$url}
			<form action="?action=login" method="post" class="sky-form">
				<header>Sistema Uniformes</header>

				<fieldset>
					<section>
						<div {$clase}>
							<label>{$mensaje}</label>
						</div>
					</section>

					<section>
						<div class="row">
							<label class="label col col-4">Usuario</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-user"></i>
									<input type="text" id="usuario" name="usuario" autocomplete="off" value="{$usuario}" {$focus}>
								</label>
							</div>
						</div>
					</section>

					<section>
						<div class="row">
							<label class="label col col-4">Contraseña</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-lock"></i>
									<input type="password" id="contrasena" name="contrasena" value="{$contrasena}" {$focps}>
								</label>
								<div class="note"><a href="#">¿Olvidó su contraseña?</a></div>
							</div>
						</div>
					</section>
                    <!--
					<section>
						<div class="row">
							<div class="col col-4"></div>
							<div class="col col-8">
								<label class="checkbox"><input type="checkbox" name="checkbox-inline" checked><i></i>Recordar contraseña</label>
							</div>
						</div>
					</section>
                    -->
				</fieldset>
				<footer>
					<button class="button">Ingresar</button>
					<a href="#" class="button button-secondary">Registrar</a>
				</footer>
			</form>
		</div>
	</body>
</html>
