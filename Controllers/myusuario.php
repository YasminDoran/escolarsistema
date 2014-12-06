<?php
$usuario= new Usuario ();

$titulo= 'Bienvenidos al Myusuario';
$contenido= 'Contenido de la variable';

$variables = array('titulo'=>$titulo, 'contenido'=>$contenido,'nombre'=>$usuario->readUsuarioS());
view('home',$variables);

?>
