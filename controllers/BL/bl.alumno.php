<?php
/*
    * Controlador para gestionar los tipos de cambios.
    *
    * @author:     Rosmery Luna
    * @versión:    1.0.0
    * @fecha:      18/01/2017
    =====================================================
                        Variables
    =====================================================
    $tipo   -> Almacena el tipo de consulta.
    $id     -> Almacena el identificador.
    $fecha  -> Almacena la fecha.
    $compra -> Almacena el valor de compra.
    $venta  -> Almacena el valor de venta.
    $_ruta  -> Almacena la ruta de archivos.
    $action -> Almacena la acción del controlador.
*/

    $action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : 'tipocambio';
    #Mostrar plantilla tipo de cambio.
    if($action=="alumnos")
    {
        $view = new Smarty;

        $view->assign(array('nombres' => '', 'paterno' => '', 'materno' => '', 'perfil' => ''));
        if(isset($_SESSION['id']) && isset($_SESSION['iperfil']))
        {
            $_SESSION['id']      =  $_SESSION['id'];
            $_SESSION['nombres'] =  $_SESSION['nombres'];
            $_SESSION['paterno'] =  $_SESSION['paterno'];
            $_SESSION['materno'] =  $_SESSION['materno'];
            $_SESSION['iperfil'] =  $_SESSION['iperfil'];
            $_SESSION['dperfil'] =  $_SESSION['dperfil'];
            $_SESSION['genero']  =  $_SESSION['genero'];
            $_SESSION['estado']  =  $_SESSION['estado'];
            $_SESSION['menuv']   =  $_SESSION['menuv'];

            if(!empty($_SESSION['id']))
            {
                $view->assign(array(
                                        'nombres'   => $_SESSION['nombres'],
                                        'paterno'   => $_SESSION['paterno'],
                                        'materno'   => $_SESSION['materno'],
                                        'perfil'    => $_SESSION['dperfil'],
                                        'menuv'     => $_SESSION['menuv'],
                ));

                $view->display('alumnos.tpl');
            }else{
                $view->display('login.tpl');
            }
        }else{
            $view->display('login.tpl');
        }
    }
    
    #Consulta el tipo de cambio.

    if($action=="ConsultarAlumnos")
    {
        $_ruta = "../../";

        require_once ($_ruta."models/DA/da.pedido.php");

       # $fecha = $_REQUEST["fecha"];
        #$fecha = str_replace(".", "-", $fecha);

        $tipo   = 4;
        $id     = '';
        $nombre  = $_POST["codigo"];

        $cls = new ClsAlumnos();
        $array = $cls->fcConsultarAlumnos($tipo, $id, $nombre);
        $responce = new stdClass();

        $array = array('aaData' => $array);

        echo json_encode($array);
    }

    #Registra el tipo de cambio.

  /*  if ($action=="ActualizarAlumnos")
    {
        $_ruta = "../../";

        require_once ($_ruta."models/DA/da.tcvuelos.php");

        $tipo   = 1;
        $id     = 0;
        $fecha  = isset($_REQUEST['fecha']) ? $_REQUEST['fecha']:"1900-01-01";
        $compra = isset($_REQUEST['compra']) ? $_REQUEST['compra']:"0.00";
        $venta  = isset($_REQUEST['venta']) ? $_REQUEST['venta']:"0.00";

        $_objReg = new ClsTCVuelos ();

        $_rpta  = $_objReg->fcTransaccionTCVuelos($tipo, $id, $fecha, $compra, $venta);

        $_rpta = array('aaData' => $_rpta);

        echo json_encode($_rpta);
    }*/
?>
