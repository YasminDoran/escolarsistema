<?php
class Usuario {
    private $name;
    public function getUsuario(){
        echo "<br>Mostrar Usuario:".$this->name;
    }
    public function setUsuario(){
            $this->name='user';
        return $this->name;
    }
    public function readUsuarioS(){
        $sql01 = "SELECT * FROM usuario ORDER BY ApellidoPaterno ASC";
        $result01 = mysql_query($sql01) or die ("Error $sql01") ;
        echo"<div class=table-responsive>";
        echo"<table class=\"table table-striped\">";
        echo"<tr><td colspan='5' align='center'><strong>CONSULTA USUARIO ESPECIFICO</strong></td></tr>";
        echo"<tr><td>NOMBRE</td><td>A PATERNO</td><td>A MATERNO</td><td>ESTATUS</td></tr>";
        while($field = mysql_fetch_array($result01)){
            $this->Nombre = $field['Nombre'];
            $this->ApellidoPaterno = $field['ApellidoPaterno'];
            $this->ApellidoMaterno = $field['ApellidoPaterno'];
            $this->Nivel = $field['Nivel'];
            switch($this->Nivel){
                case 1:
                    $type ="Administrador";
                    break;
                case 2:
                    $type ="Maestro";
                    break;
                case 3;
                    $type ="Alumno";
                    break;
            }
            echo"<tr><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$this->Nivel</td></tr>";
        }
        echo"</table>";
        echo"</div>";
    }
}
