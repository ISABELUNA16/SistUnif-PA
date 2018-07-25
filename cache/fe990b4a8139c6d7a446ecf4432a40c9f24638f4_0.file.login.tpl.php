<?php
/* Smarty version 3.1.30, created on 2017-01-22 00:05:11
  from "C:\wamp\www\sistuniformes-b\sistuniformes\views\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5883f737e52c26_86513685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe990b4a8139c6d7a446ecf4432a40c9f24638f4' => 
    array (
      0 => 'C:\\wamp\\www\\sistuniformes-b\\sistuniformes\\views\\templates\\login.tpl',
      1 => 1484770858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5883f737e52c26_86513685 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
            <?php echo $_smarty_tpl->tpl_vars['url']->value;?>

			<form action="?action=login" method="post" class="sky-form">
				<header>Sistema Uniformes</header>

				<fieldset>
					<section>
						<div <?php echo $_smarty_tpl->tpl_vars['clase']->value;?>
>
							<label><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</label>
						</div>
					</section>

					<section>
						<div class="row">
							<label class="label col col-4">Usuario</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-user"></i>
									<input type="text" id="usuario" name="usuario" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['focus']->value;?>
>
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
									<input type="password" id="contrasena" name="contrasena" value="<?php echo $_smarty_tpl->tpl_vars['contrasena']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['focps']->value;?>
>
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
<?php }
}
