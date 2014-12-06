<?php
function view ($plantilla, $variables = array() ) {//recibe un arreglo, una platilla
    extract ($variables);//extract separa en diferentes varibles el arreglo y llama el archivo pertinenete
    require ('View/'.$plantilla.'.tpl.php');//manda a llamr una plantilla en particular y recibe un arreglo de variables
}
function controller ($nombre){

    if(empty($nombre)) //si no llega la variable nombre
        $nombre='home';//archivo que se va abrir sino existe el otro
    $archivo="controllers/$nombre.php";

    if (file_exists($archivo))
        require ($archivo);
        else
            echo "error archivo no encontrado";
}