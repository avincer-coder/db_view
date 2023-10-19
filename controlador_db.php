<?php 

require_once "modelo_db.php";

class controlador_db
{
    public function recolectar_data()
    {
       $cliente = $_POST["cliente"];
       $total = $_POST["total"];

       $modelo_db = new modelo_db();
       $modelo_db->insertar_datos($cliente, $total);
    }
}

$controlador1 = new controlador_db();
$controlador1->recolectar_data();
?>