<?php 
include "../controllers/prestamos_controller_consultas_backend_api+frontend.php";

class prestamoGetServices {

    function prestamoGet() {
        $objDB = new prestamoGetController();
        $data = array();
        include "../config/config.php";

        if (isset($_GET["id"])) {
            $data = $objDB->prestamoById($_GET["id"]);
        } else {
            $data = $objDB->listadoprestamo();
        }

        if ($data) {
            return $data;
        } else {
            return array();
        }
    }
}
?>
