<?php
//Llamada al modelo
$not=new NoticiasModel();
$not1=new NoticiasModel();
$not2=new NoticiasModel();


$datosNoticias=$not->getNoticiasPublicadas();
$datosNoticiasTodas=$not2->getNoticias();


//Llamada a la vista
if(isset($_REQUEST['id'])){
    $idNoticia=$_GET['id'];
    $datosNoticiaIndividual=$not1->getNoticiasById($idNoticia);
    if(!isset($_REQUEST['imp'])){
        include("views/contentNoticiasIndividual.php"); 
    }
    
}else if((isset($_REQUEST['sec']) && $_GET['sec']=='Noticias') || !isset($_REQUEST['sec'])){
    include("views/contentNoticias.php");
}
?>