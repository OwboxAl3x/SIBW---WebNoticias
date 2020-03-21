<?php
//Llamada al modelo
include("models/seccionesModel.php");
$seccion=new SeccionesModel();
$seccion1=new SeccionesModel();
$seccion2=new SeccionesModel();
$seccion3=new SeccionesModel();
$seccion4=new SeccionesModel();
$seccion5=new SeccionesModel();
$seccion6=new SeccionesModel();
$datosSecciones=$seccion->getSecciones();
 
//Llamada a la vista
include("views/header.php");
?>