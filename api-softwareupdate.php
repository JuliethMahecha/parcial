<?php
    include "../app/software-update-services.php";
    include "../config/config.php";

    $objAPI = new softwareUpdateServices();

    $method = $_SERVER['REQUEST_METHOD'];
    header("Content-Type: Application/json");
    if ($method == 'PUT') {
        $_POST = json_decode(file_get_contents("php://input") , true);
        $objAPI->updateSoftware($_POST);
    }else{
        echo json_encode(array("data"=>null, "error"=>"3", "msg"=>$errorResponse[3] ));
    }
  
?>
