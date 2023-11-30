<?php 
    include "../controllers/software-create-controller.php";

    class softwaresCreteServices{    

        function saveSoftware($datos){
            include "../config/config.php";
            
            if(isset($datos["ced"])){//verificar la existencia de envio de datos
                $objDB = new softwaresCreateController();

                $data = array(
                    "ced"=> $datos["ced"],
                    "nom"=> $datos["nom"],
                    "dir"=> $datos["dir"],
                    "tel"=> $datos["tel"],
                    "wat"=> $datos["wat"]
                );

                $ejecucion = $objDB->saveClientes($data);
                if($ejecucion){ // Todo se ejecuto correctamente
                    echo json_encode(array("data"=>null, "error"=>"0", "msg"=>$errorResponse[0] ));                    
                }else{ // Algo paso mal
                    echo json_encode(array("data"=>null, "error"=>"10", "msg"=>$errorResponse[10] ));
                }
            }else{
                echo json_encode(array("data"=>null, "error"=>"5", "msg"=>$errorResponse[5] ));
            }
        }

    }

?>
