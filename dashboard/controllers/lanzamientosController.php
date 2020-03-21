<?php
//Llamada al modelo
include("models/lanzamientosModel.php");
$lan=new LanzamientosModel();
$datosLanzamientos=$lan->getLanzamientos();
 
//Llamada a la vista
include("views/contentLanzamientos.php");
?>