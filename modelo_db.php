<?php 
class modelo_db
{
    // Aqui van a ir variables
    private $con;
    
    
    // funcion constructor
    function __construct()
    {

        $this -> con = new PDO("mysql:host=localhost;dbname=nivel3", "root", "");



    }


    // Aqui van a ir funciones
    public function insertar_datos($cliente, $total)
    {
        $query = $this->con->prepare("INSERT INTO pedidos (ID_pedidos, Cliente, Total) VALUES (?,?,?)"); 
        $query->execute(array("", $cliente, $total));
    }

    function leer_datos()
    {

    }

    function editar_datos()
    {

    }
}
// insertar_datos(jorge, 235+)







?>