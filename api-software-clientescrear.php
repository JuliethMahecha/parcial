<?php
    include "../app/clientes-create-services.php";
    include "../app/software-create-services.php";
    include "../config/config.php";

    $objAPI = new clientesCreteServices();
    $objAPI = new softwareCreteServices();

    $method = $_SERVER['REQUEST_METHOD'];
    header("Content-Type: Application/json");
@@ -13,4 +13,4 @@
        echo json_encode(array("data"=>null, "error"=>"3", "msg"=>$errorResponse[3] ));
    }

?>
?>
