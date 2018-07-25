
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
        <title>Sistema de Uniformes</title>
         
		<link rel="stylesheet" href="views/css/principal.css">
		<link rel="stylesheet" href="views/css/font-awesome.css">
		<link rel="stylesheet" href="views/css/menu.css">
		<link rel="stylesheet" href="views/css/menu-blue.css">
	</head>
	<body class="bg-blue">
	<form action="" method="post">
		<div class="body">
			<aside>
				<ul class="sky-mega-menu sky-mega-menu-pos-left sky-mega-menu-anim-scale sky-mega-menu-response-to-switcher">
					<!-- Principal -->
					<li>
						<a href="?action=uniformes&v=accesomenuuniformes"><i class="fa fa-home"></i>Principal</a>
					</li>
					<!--/ Principal -->

					<!-- switcher -->
					<li class="switcher">	
						<a href="#">
							<i class="fa fa-bars">Professional Air</i>
						</a>
					</li>
					<!--/ switcher -->
					{$menuv}
					<!-- Mis Datos -->
					
					<li aria-haspopup="true" class="bottom">
						<a href="#"><i class="fa fa-user-circle"></i>Rosmery Luna</a>
						<div class="grid-container3">
							<ul>
								<li><a href="#"><i class="fa fa-user"></i>Mi Perfil</a></li>
								<li><a href="?action=cerrarsesion"><i class="fa fa-lock"></i>Cerrar Sesión</a></li>
							</ul>
						</div>
					</li>
					<!--/ Mis Datos -->
				</ul>
			</aside>
		</div>
	  </form>
	</body>
</html>
