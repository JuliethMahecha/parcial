<?php 
    include "../controllers/prestamos_controller_consultas_backend_api.php";

    class prestamoGetServices{

        function prestamoGet(){
            $objDB = new prestamoGetController();
            $data = array();
            include "../config/config.php";

            if (isset($_GET["id"])){
                $data = $objDB->prestamoById($_GET["id"]);
            }else{
                $data = $objDB->listadoprestamo();
            }

           
            $prestamos = array();
            $prestamos["data"] = array();

            if($data){ 
                foreach($data as $row){
                    $item = array(
                        "Codigo" => $row["cod"],
                        "Fecha" => $row["fecha"],                    
                        "Hora" => $row["hora"],
                        "Fecha Devolucion" => $row["fechadevolucion"],
                        "Observaciones" => $row["observacion"],
                        "Sanciones" => $row["sancion"],
                        "id usuario" => $row["fk_id_usuario"],
                        "id libro" => $row["fk_id_libro"],
                        
                    );
                    array_push($prestamos["data"], $item);              
                }
                $prestamos["msg"] = "OK";
                $prestamos["error"] = "0";
                echo json_encode($prestamos); 
                
            }else{
                echo json_encode(array("data"=>null, "error"=>"4", "msg"=>$errorResponse[4] ));
            }
        }
        
    }

?>
