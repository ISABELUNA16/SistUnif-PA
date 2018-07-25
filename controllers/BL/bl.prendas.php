<?php
    #header("Content-Type: text/html;charset=utf-8");

    $action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : 'prendas';

    if ($action=='prendas'){
		$_SESSION['usuario'] 	=	$_SESSION['usuario'];
		$_SESSION['contrasena'] =	$_SESSION['contrasena'];
		$_SESSION['nombre'] 	=	$_SESSION['nombre'];
		$_SESSION['cargo'] 		=	$_SESSION['cargo'];
	}

    if ($action=='ListarPrendas'){
		$_ruta = "../../";

        require_once ($_ruta."models/DA/da.prendas.php");

        $tipo   = $_POST['tipo'];
        $id     = $_POST['id'];
        $nombre = $_POST['nombre'];

        $cls = new ClsPrendas();
        $array = $cls->fcConsultarPrendas($tipo, $id, $nombre);
        $cls = null;

		$array = array('aaData' => $array);
		echo json_encode($array);
	}
?>
