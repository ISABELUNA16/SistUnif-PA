<?php
	$_ruta = "";
    #require_once ($_ruta."models/DA/da.usuario.php");
    
    $action = isset($_GET["action"]) ? $_GET["action"] : 'login';
  
    if ($action=='principal'){
       
        $view = new Smarty;

		$_SESSION['usuario'] 	=	$_SESSION["usuario"];
		$_SESSION['contrasena'] =	$_SESSION["contrasena"];
		$_SESSION['nombre'] 	=	$_SESSION["nombre"];
		$_SESSION['cargo'] 		=	$_SESSION["cargo"];

		$registro = '<tr>
											<td>0215471</td>
											<td>Rosmery Isabel Luna</td>
											<td>12/12/2016</td>
											<td>Entregado</td>
									   </tr>
										<tr>
											<td>0214851</td>
											<td>Juan Sarmiento </td>
											<td>14/11/2016</td>
											<td>Entregado</td>
										</tr>
										<tr>
											<td>0214125</td>
											<td>Andrea Pino</td>
											<td>01/01/2017</td>
											<td>Pendiente</td>
										</tr>
										<tr>
											<td>0482114</td>
											<td>Alejandro Tapia</td>
											<td>09/03/2017</td>
											<td>Entregado</td>
										</tr>
										<tr>
											<td>0482114</td>
											<td>Gerardo Manrique</td>
											<td>09/03/2017</td>
											<td>Entregado</td>
										</tr>
										<tr>
											<td>0482114</td>
											<td>Marisol Benavente</td>
											<td>09/03/2017</td>
											<td>Entregado</td>
										</tr><tr>
											<td>0482114</td>
											<td>Gustavo Suarez</td>
											<td>16/03/2017</td>
											<td>Entregado</td>
										</tr><tr>
											<td>0482114</td>
											<td>Meliza Manrique</td>
											<td>05/03/2017</td>
											<td>Entregado</td>
										</tr>
										<tr>
											<td>0482114</td>
											<td>Ana María Manrique</td>
											<td>25/03/2017</td>
											<td>Pendiente</td>
										</tr>
										<tr>
											<td>0482114</td>
											<td>Gerardo Valdez</td>
											<td>09/03/2017</td>
											<td>Entregado</td>
										</tr>
										<tr>
											<td>0482114</td>
											<td>Eduardo Torres</td>
											<td>17/03/2017</td>
											<td>Entregado</td>
										</tr>
										<tr>
											<td>0482114</td>
											<td>Mónica Cabrejos</td>
											<td>04/03/2017</td>
											<td>Entregado</td>
										</tr>';
		if(isset($_SESSION['usuario'])){
			$view->assign(array(	
							'usuario' 		=> $_SESSION['usuario'], 
							'contrasena' 	=> $_SESSION['contrasena'],
							'nombre' 		=> $_SESSION['nombre'],
							'cargo'			=> $_SESSION['cargo'],
							'url'			=> '',
							'registro'		=> $registro
					));	
		
        	$view->display('principal.tpl');
		}else{
			
			$view->assign(array(	
							'usuario' 		=> '',
							'contrasena' 	=> '',
							'nombre' 		=> '',
							'cargo'			=> '',
							'mensaje'		=> '',
							'nombre'		=> '',
							'url'			=> '<meta http-equiv="refresh" content="0;url=?action=login">',
							'registro'		=> $registro
					));	
			
			$view->display('login.tpl');
		}
		
	}
?>	