<?php
    $_ruta = "";
    
    require_once ($_ruta."models/DA/da.uniformes.php");
    
    $view = new Smarty;
    
    $view->assign(array('nombres' => '', 'paterno' => '', 'materno' => '', 'perfil' => ''));
    
    $action = isset($_GET["action"]) ? $_GET["action"] : 'uniformes';
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
        $_SESSION['menuv'] =  isset($_SESSION['menuv']) ? $_SESSION['menuv'] : '';

        if(!empty($_SESSION['id']))
        {
            $genera_menu_uniformes = '';

            if ($v=='accesomenuuniformes')
            {
                $_objReg = new ClsUniformes (); 
                $tipo       = 3;                                                #Almacena el tipo de consulta de la tabla tb_vue_menu
                $id         = $_SESSION['id'];                                  #Almacena el id del usuario
                $modulo     = isset($_POST['menuv']) ? $_POST['menuv'] : '';    #Almacena el módulo                
                $cls = new ClsUniformes();
                $array = $cls->fcConsultaruniformes($tipo, $id, $modulo, $imenu);
                $responce = new stdClass();
                
                if(sizeof($array)==0)
                {
                    $view->assign(array(
                            'nombres'   => $_SESSION['nombres'], 
                            'paterno'   => $_SESSION['paterno'], 
                            'materno'   => $_SESSION['materno'], 
                            'perfil'    => $_SESSION['dperfil'], 
                            'modulos'   => '', 
                            'menuv'     => ''
                    )); 
                }
                else
                {
                     $genera_menu_uniformes = '';

                    for ($i=0;$i<sizeof($array);$i++)
                    {
                        $row = $array[$i];
                        
                        #echo $row['menu']."<br />";
                        #echo utf8_encode($row['menu'])."<br/>";
                        switch (utf8_encode($row['menu'])) {
                            case 'Nuevo':
                                $genera_menu_uniformes =  $genera_menu_uniformes.'<!-- Nuevo -->
                                                                        <li>
                                                                          <a href="?action=nuevo"><i class="fa fa-file-o"></i>Nuevo</a>
                                                                        </li>';
                                break;
                                
                            case 'Buscar':
                                 $genera_menu_uniformes =  $genera_menu_uniformes.'<!-- Buscar -->
                                                                        <li>
                                                                          <a href="?action=#"><i class="fa fa-search"></i>Buscar</a>
                                                                        </li>';
                                break;
                                
                            case 'Reporte':
                                 $genera_menu_uniformes =  $genera_menu_uniformes.'<!-- Reportes -->
                                                                        <li>
                                                                          <a href="?action=#"><i class="fa fa-file-word-o"></i>Reporte</a>
                                                                        </li>';                               
                                break;
                                
                            case 'Seguimiento':
                                 $genera_menu_uniformes =  $genera_menu_uniformes.'<!-- Seguimiento -->
                                                                        <li>
                                                                          <a href="?action=#"><i class="fa fa-exchange"></i>Seguimiento</a>
                                                                        </li>';
                                break;

                            case 'Registro de Pago':
                                 $genera_menu_uniformes =  $genera_menu_uniformes.'<!-- Registro -->
                                                                        <li>
                                                                          <a href="?action=#"><i class="fa fa-dollar"></i>Registro de Pagos</a>
                                                                        </li>';
                                break;
                        }
                    }
                }
            }else{
                $genera_menu_uniformes = '';
            }
            
            $_SESSION['menuv'] =  $genera_menu_uniformes;
            
            $view->assign(array(
                                    'nombres'   => $_SESSION['nombres'],
                                    'paterno'   => $_SESSION['paterno'],
                                    'materno'   => $_SESSION['materno'],
                                    'perfil'    => $_SESSION['dperfil'],
                                    'menuv'     => $_SESSION['menuv']
            ));
            
            $view->display('principal.tpl');
        }else{
            $view->display('login.tpl');
        }
    }else{
        $view->display('login.tpl');
    }
?>