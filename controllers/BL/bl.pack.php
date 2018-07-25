<?php
    header("Content-Type: text/html;charset=utf-8");

    $action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : 'pedido';

    if ($action=='pack'){
		$_SESSION['usuario'] 	=	$_SESSION['usuario'];
		$_SESSION['contrasena'] =	$_SESSION['contrasena'];
		$_SESSION['nombre'] 	=	$_SESSION['nombre'];
		$_SESSION['cargo'] 		=	$_SESSION['cargo'];
	}

    if ($action=='ListarPack'){
		$_ruta = "../../";

        require_once ($_ruta."models/DA/da.pack.php");
       	#$fecha = $_REQUEST["fecha"];
        #$fecha = str_replace(".", "-", $fecha);
        $tipo   = $_POST['tipo'];
        $id     = $_POST['id'];
        $nombre = $_POST['nombre'];
        /*
        echo $tipo."<br/>";
        echo $id."<br/>";
        echo $nombre;
        */
        $cls = new ClsPack();
        $array = $cls->fcConsultarPack($tipo, $id, $nombre);
        $cls = null;

        /*
        for ($i=0;$i<sizeof($array);$i++)
        {
            $row = $array[$i];
            $responce->rows[$i]['id']=$row['id'];
            $responce->rows[$i]['cell']=array($row['id'], utf8_decode($row['pack']), $row['estado']);
            #$array->rows[$i]['id']=$row['id'];
            #$array->rows[$i]['aaData']=array($row['id'], utf8_decode($row['pack']), $row['estado']);
        }
        */

		$array = array('aaData' => $array);
		echo json_encode($array);
	}
?>
