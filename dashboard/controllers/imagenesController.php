<?php
//Llamada al modelo
include("models/imagenesModel.php");
$img=new ImagenesModel();
$img1=new ImagenesModel();
$img2=new ImagenesModel();
$datosImagenes=$img->getImagenes();
 
//Llamada a la vista
if(isset($_REQUEST['sec']) && $_GET['sec']=='Galeria'){
    include("views/contentGaleria.php");
}
?>