<!-- Javascript -->
    <script language="JavaScript" src="./js/funciones.js"></script>         
<div class="nav">
    <ul>
<?php

        foreach($datosSecciones as $datoSeccion) {
            if($datoSeccion['Padre']==0){
                echo "<li><a href=index.php?sec=" . $datoSeccion['Nombre'] . ">" . $datoSeccion['Nombre'] . "</a></li>";
            }
        }
        if(isset($_SESSION['usuario'])){
            echo "<li><a href=index.php?sec=Login>Logout ( ".$_SESSION['usuario']." )</a></li>";
        }else{
            echo "<li><a href=index.php?sec=Login>Login</a></li>";

        }
?>
        <li><input type="search" id="buscador" name="buscador" placeholder="Buscar Noticias"</li>
        <li><div id="resultados"></div></li>
    </ul>
</div>

