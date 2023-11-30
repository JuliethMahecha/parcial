<?php
    include "../app/software-delete-services.php";
    include "../config/config.php";
    
    $objAPI = new softwaresDeleteServices();

    $method = $_SERVER['REQUEST_METHOD'];
    header("Content-Type: Application/json");
    if ($method == 'DELETE') {
        //$_POST toma los datos JSON que viene del REQUEST
        $_POST = json_decode(file_get_contents("php://input") , true);
        $objAPI->deleteSoftware($_POST);
    }else{
        echo json_encode(array("data"=>null, "error"=>"3", "msg"=> $errorResponse[3]));
    }
  
?>
