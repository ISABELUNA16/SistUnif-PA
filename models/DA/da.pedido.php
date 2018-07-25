<?php
    /**
    autor: RosmeryIsabe luna
     * Clase que permite realizar operaciones de mantenimiento para la tabla "tb_unif_menu"
     * 
     * @author:    Rosmery Luna
     * @versión:    1.0
     * @fecha:      18/01/2017
     */
    class ClsAlumnos {
        public $tipo;
        public $id;
        public $nombre;
     
        
        var $_objMys=null;
        var $_msg = ""; 
        var $_nColumnas = 0;
        var $_nFilas = 0;
        
        public function __construct()
        {                           }
        
        public function __destruct()
        {                           }
        
        public function conectarBD()
        {
            if($this->_objMys==null)
            {
                require 'daMYSQLI.php';    
                $this->_objMys  = new ClsBd();
            }
            
            $this->_cn 	= $this->_objMys->fcConectar();
        }
        /**
         * Metodo que valida el inicio de sesión del Modulo de la tabla "tb_sis_Modulo"
         * @param type $tipo        Tipo de operación del Modulo 1:Listar 2:Buscar 3:Login.
         * @param type $id          Identificador de usuario.
         * @param type $Modulo      Nombre de módulo.
        
         */
       
        function fcConsultarAlumnos($tipo, $id, $nombre)
        {
            $this->conectarBD();
            $arrayVal = null;
            $sqlProc  = "CALL sp_unif_consultaralumno(?,?,?)";
            $arrayVal = array($tipo, $id, $nombre);
            $arrayTip = array('i', 'i', 's');
            $refSP    = null;
            
            $refSP = $this->_objMys->fcEjecutarConsulta($sqlProc,$this->_cn,$arrayVal , $arrayTip);
            $datos = array();
            $cont = 0;
            $fila = $this->_objMys->bind_result_array($refSP);
        
            if(!$refSP->error)
            {
                while ($refSP->fetch())
                {
                    $json_array[$cont] = $this->_objMys->getCopy($fila);
                    $cont = $cont + 1;
                }
                if($cont>0)
                {
                    return $json_array;
                }
            }
            
            $this->_total = $cont;
            $refSP->free_result();
            $refSP->close();
            unset($refSP);
            $refSP = null;
            
            return $datos;
        }
        
        /**
         * Metodo que permite realizar el mantenimiento en la tabla "tb_sis_Modulo"
         * @param type $tipo        Tipo de operación del Modulo 1:Insertar 2:Actualizar 3:Eliminar.
         * @param type $id          Identificador del Usuario.
         * @param type $Modulo      Identificador de módulo.
        */
        
      /*function fcTransaccionVuelos($tipo, $id, $modulo)
        {
            $this->conectarBD();
            $arrayVal = null;
            $sqlProc  = "CALL sp_vue_transaccionmenu(?,?,?)";
            $arrayVal = array($tipo, $id, $modulo);
            $arrayTip = array('i','i','i');
            
            $refSP = $this->_objMys->fcEjecutaIU($sqlProc,$this->_cn,$arrayVal , $arrayTip);
            return trim($refSP);
        }*/
    }
?>