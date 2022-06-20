<?php
namespace App\Models\Tarea;

class Estudiante
{
    private $nombres;
    private $codAlum;
 
    public function __construct($nombres,$codAlum)
    {
        $this->nombres = $nombres;
        $this->codAlum = $codAlum;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function getCodAlum()
    {
        return $this->codAlum;
    }

}