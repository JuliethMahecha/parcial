<?php
session_start();
require_once( "../models/models_admin.php");

class ConsultasDB extends DBConfig {
    					
	function consulta_generales($sql){
		$this->config();
		$this->conexion(); 
		  
  		$records = $this->Consultas($sql);		 		  		  		  

  		$this->close();		
		return $records;				
	}
}

class prestamoGetController extends ConsultasDB
{
	// ****************************************************************************
	// Agregue aqui debajo el resto de Funciones - Se ha dejado  Listado y detalle
	// ****************************************************************************
    //MUESTRA LISTADO DE CLIENTES
	function listadoprestamo($start=0, $regsCant = 0){
		$sql = "SELECT * FROM prestamos";
		if ($regsCant > 0 )
			 $sql = "SELECT * from prestamos $start,$regsCant";
		$lista = $this->consulta_generales($sql);	
		return $lista;
	}
	// DETALLE DE Clientes SELECICONADA SEGUN ID
	function prestamoById($idu){
		$sql = "SELECT * from prestamos where id=$idu ";
		$lista = $this->consulta_generales($sql);	
		return $lista;
	}	
	
}//fin CLASE



?>
