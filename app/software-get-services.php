<?php 
    include "../controllers/clientes-get-controller.php";

    class clientesGetServices{

        function softwaresGet(){
            $objDB = new softwaresGetController();
            $data = array();
            include "../config/config.php";

            if (isset($_GET["id"])){
                $data = $objDB->SoftwaresById($_GET["id"]);
            }else{
                $data = $objDB->listadoSoftwares();
            }

            //Creamos Array que entregara un Json de resultado
            $softwares = array();
            $softwares["data"] = array();

            if($data){ //Valida si hay datos
                foreach($data as $row){//Recorrer los registros y montar cada uno en el ARRAY temporal
                    $item = array(
                        "idc" => $row["id"],
                        "cc" => $row["cedula"],
                        "name" => $row["nombre"],
                        "addr" => $row["direccion"],
                        "phone" => $row["telefono"],
                        "what" => $row["whatsapp"],
                        "datec" => $row["datecreacion"]
                    );
                    array_push($clientes["data"], $item);  //  montamos el array temporal en JSON            
                }
                $clientes["msg"] = "OK";
                $clientes["error"] = "0";
                echo json_encode($softwares); //Formateamos tods los datos a JSON OFICIAL
                
            }else{
                echo json_encode(array("data"=>null, "error"=>"4", "msg"=>$errorResponse[4] ));
            }
        }
        
    }

?>
