<?php
$titulo = 'Bienvenidos al Sistema';
$contenido = '.........Contenido...........';

$variables = array ('titulo'=>$titulo,'contenido'=>$contenido);
view('about', $variables); //manda a llamar al archivo about.tpl