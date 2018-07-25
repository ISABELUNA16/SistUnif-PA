<?php

    $_ruta = "";

   /* require_once ($_ruta."models/DA/da.sub_nuevo.php");*/

    $view = new Smarty;

    $view->assign(array('nombres' => '', 'paterno' => '', 'materno' => '', 'perfil' => ''));
    $action = isset($_GET["action"]) ? $_GET["action"] : 'login';
    $v = isset($_GET["v"]) ? $_GET["v"] : 'accesomenuuniformes';


    if(isset($_SESSION['id']) && isset($_SESSION['iperfil']))
    {
        $_SESSION['id']     =   $_SESSION['id'];
        $_SESSION['nombres']=   $_SESSION['nombres'];
        $_SESSION['paterno']=   $_SESSION['paterno'];
        $_SESSION['materno']=   $_SESSION['materno'];
        $_SESSION['iperfil']=   $_SESSION['iperfil'];
        $_SESSION['dperfil']=   $_SESSION['dperfil'];
        $_SESSION['genero'] =   $_SESSION['genero'];
        $_SESSION['estado'] =   $_SESSION['estado'];
        $_SESSION['menuv'] =  isset($_SESSION['menuv']) ?
        $_SESSION['menuv'] : '';

        if(!empty($_POST['buscar'])){
            $cls = new ClsAlumnos();
            $array = $cls->fcConsultarAlumnos($tipo,$id,$nombre);
        }

         $view->display('pedido.tpl');
    }else{
        $view->display('cerrarsesion.tpl');
    }
?>
