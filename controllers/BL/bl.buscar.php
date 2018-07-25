<?php
	$_ruta = "";
    #require_once ($_ruta."models/DA/da.usuario.php");
    
    $action = isset($_GET["action"]) ? $_GET["action"] : 'login';

    #$view->assign(array('mostrar' => 0, 'mensaje' => '', 'nombre' => '','cargo' => ''));

    if ($action=='buscar'){
       
     	$view = new Smarty;		
		#$view->assign(array('usuario' => 'Rosmery Luna', 'perfil' => 'Programadora','empresa' => 'Professional Air'));
		$_SESSION['usuario']  		= $_SESSION["usuario"];
		$_SESSION['contrasena']  	= $_SESSION["contrasena"];
		$_SESSION['nombre'] 		= $_SESSION["nombre"];
		$_SESSION['cargo'] 			= $_SESSION["cargo"];


		if (isset($_SESSION['usuario'])){
				$registro = '<tr>
									<td>dfsfsf</td>	
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>		
								</tr>
								<tr>
									<td>dfsfsf</td>	
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>		
								</tr>
								<tr>
									<td>dfsfsf</td>	
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>	
								</tr>
								<tr>
									<td>dfsfsf</td>	
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>	
								</tr>
								<tr>
									<td>dfsfsf</td>	
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>	
								</tr>
								<tr>
									<td>dfsfsf</td>	
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>	
								</tr>
								<tr>
									<td>dfsfsf</td>	
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>
									<td>sdfdsf</td>	
								</tr>';
								
				$view->assign(array(	
								'usuario' 		=>$_SESSION['usuario'], 
								'contrasena'	=>$_SESSION['contrasena'],
								'nombre' 		=>$_SESSION['nombre'],
								'cargo' 		=>$_SESSION['cargo'],
								'registro'		=> $registro
				));	
		
       			$view->display('buscar.tpl');



		}else{
				$view->assign(array(
								'usuario'			 => '',
								'contrasena' 		 => '',
								'nombre' 			 => '',
								'cargo' 			 => '',
								'url'				 => '<meta http-equiv="refresh" content="0;url=?action=login">'

				));
				
				$view->display('login.tpl');

		}

	}
?>