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
        $_SESSION['menuv'] =   isset($_SESSION['menuv']) ? $_SESSION['menuv'] : '';

         if(!empty($_SESSION['id']))
        {
            $genera_menu_uniformes = '';
            $ver_menu = '';

            if ($v=='accesomenuuniformes')
            {   
                $_objReg = new ClsUniformes ();
                $tipo       = 6;                                                #Almacena el tipo de consulta de la tabla 
                $id         = $_SESSION['id'];                                  #Almacena el id del usuario
                $modulo     = isset($_POST['menuv']) ? $_POST['menuv'] : '';    #Almacena el módulo
                $imenu      = 0;                
                
                $cls = new ClsUniformes();
               
                $array = $cls->fcConsultaruniformes($tipo, $id, $modulo,$imenu); /*parametros de la bd*/
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
                    $ver_menu = ''; /* opciones de menu*/
                    $ver_submenu = 0;    /* opciones de sub menu */
                    
                    for ($i=0; $i < sizeof($array); $i++)
                    {
                        $row = $array[$i];
                                    
                    switch (utf8_encode($row['menu'])) {
                         case 'Pedido':
                            if($ver_menu!=utf8_encode($row['menu'])){
                                $genera_menu_uniformes =  $genera_menu_uniformes.'<!-- Buscar -->
                                                                    <li>
                                                                      <a href="?action=pedido"><i class="fa fa-search"></i>Pedido de Uniformes</a>
                                                                    </li>';
                            }
                              
                            break;
                           
                         case 'Seguimiento':

                                if($ver_menu!=utf8_encode($row['menu'])){
                                    $genera_menu_uniformes =  $genera_menu_uniformes.'<!-- Buscar -->
                                                                        <li>
                                                                          <a href="?action=#"><i class="fa fa-search"></i>Seguimiento de Uniformes</a>
                                                                        </li>';
                                }                            
                                break;      
                                
                            case 'Registro':
                                if($ver_menu!=utf8_encode($row['menu'])){
                                 $genera_menu_uniformes =  $genera_menu_uniformes.'<!-- Reportes -->
                                                                    <li>
                                                                      <a href="?action=#"><i class="fa fa-file-word-o"></i>Reg. Comprobante de Pago</a>
                                                                    </li>';                               
                                }
                                break;
                                
                            case 'Reporte':
                                if($ver_menu!=utf8_encode($row['menu'])){
                                 $genera_menu_uniformes =  $genera_menu_uniformes.'<!-- Seguimiento -->
                                                                        <li>
                                                                          <a href="?action=#"><i class="fa fa-exchange"></i>Reporte de Depositos</a>
                                                                        </li>';
                               }
                                break;

                            case 'Entrega':
                                 if($ver_menu!=utf8_encode($row['menu'])){
                                 $genera_menu_uniformes =  $genera_menu_uniformes.'<!-- Registro -->
                                                                        <li>
                                                                          <a href="?action=#"><i class="fa fa-dollar"></i>Entrega de Uniformes</a>
                                                                    </li>';
                                }
                                break;
                        }
                        $ver_menu = utf8_encode($row['menu']);
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