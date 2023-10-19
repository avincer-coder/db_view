<?php 
class prueba
{
   public $nombre;


   function saludar(){
    echo"Holaaaaaa";
   }
   
   function despedirse(){
    echo"Adioooooos";
   }

}


$PruebaCarlos = new prueba();
$PruebaCarlos -> despedirse();
?>