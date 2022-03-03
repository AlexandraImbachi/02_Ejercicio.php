<?php
require_once("01_Persona.php");
class Estudiante extends Persona
{
    public $grado;

    public function __construct($vr_nombre, $vr_celular, $vr_email, $vr_grado)
    {
        parent::__construct($vr_nombre, $vr_celular, $vr_email);
        $this->grado=$vr_grado;
    }

    public function getGrado()
    {
        return $this->grado;
    }

    

}



?>