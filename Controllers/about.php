<?php
$titulo = 'Bienvenidos al about';
$contenido = '.........Contenido About...........';

$variables = array ('titulo'=>$titulo,'contenido'=>$contenido);
view('about', $variables); //manda a llamar al archivo about.tpl
