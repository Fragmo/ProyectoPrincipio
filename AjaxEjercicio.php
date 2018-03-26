<?php
require './metodos.php';
$sql = "select * from ".$_GET['tipo']." where nivel = ".$_GET['nivel']. " and id =". $_GET['id'];
print_r($sql);
$ejecutaSQL = mysqli_query($creaConexion, $sql);
$fetch = mysqli_fetch_all($ejecutaSQL);
for ($i = 0; $i < count($fetch); $i++){
    $id = 
    $nivelEj = $fetch[$i][0];
    $nombre =$fetch[$i][1];
    $descripcion = $fetch[$i][2];
    $repeticiones = $fetch[$i][3];
    $foto = $fetch[$i][4];
    
    
    print( ' 
        <div class="col-sm-4 ">
            <article class="col-item">
            <div class="pull-left " ><a href="producto.php?codigo='.id.'"><img class="img-responsive" src="imagenes/'.$foto.'"/></a></div><br>
            <div class="text-center">'.$nombre.'      '.$descripcion.'€,<br> '.$repeticiones.',<br> '.$nivelEj.',<br> precio:'.$precioFiltro.'<br></div>
            </article>
        </div>
');
}


