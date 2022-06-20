<?php
namespace App\Models\Tarea;
/*require_once 'App/Models/Tarea/Estudiante.php';
require_once 'App/Models/Tarea/Cursos.php';*/

use App\Models\Tarea\{Estudiante,Cursos};


Class Matricula
{
    private $codMatri;
    private $arreEstu;
    private $arreCurs;

    public function __construct($codMat)
    {
        $this->codMatri = $codMat;
        $this->arreEstu = [];
        $this->arreCurs = [];
    }

    public function getCodMatri()
    {
        return $this->codMatri;
    }


    public function setEstudiante(Estudiante $estudiante)
    {
        $this->arreEstu[] = $estudiante;
    }
    public function getEstudiante()
    {
        return $this->arreEstu;
    }


    public function setCursos(Cursos $cursos)
    {
        $this->arreCurs[] = $cursos;
    }
    public function getCursos()
    {
        return $this->arreCurs;
    }
}