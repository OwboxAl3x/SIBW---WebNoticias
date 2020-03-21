<?php
//Llamada al modelo
include("models/comentariosModel.php");
$com=new ComentariosModel();
$datosComentarios=$com->getComentarios();

$comentario=new ComentariosModel();

?>
