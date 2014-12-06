<?php
require 'helpers.php';
require ('./template/header.php');
require ('./template/menu.php');
require ('./Clases/Usuario.php');
require ('./bd/bd.php');

if (empty($_GET['url']))
    $_GET['url']='home'; //si esta vacia manda a llamar al home

controller ($_GET['url']); //llamar el metodo controller
require('./template/footer.php');
?>
