<?php

require_once __DIR__.'/../vendor/autoload.php';


use App\Models\Tarea\{Estudiante,Cursos,Matricula};

$matri = new Matricula(5712939247);
echo "Codigo de matricula: ".$matri->getCodMatri(); echo "\n";



$matri->setEstudiante(new Estudiante("Jean Pierre Vasquez Hurtado", 202012641932));echo "\n";

foreach($matri-> getEstudiante() as $estudiante)
{
    echo "Nombre del estudiante: ".$estudiante->getNombres(); echo "\n"; 
    echo " ";
    echo "Codigo del estudiante: ".$estudiante->getCodAlum(); echo "\n";
}



$matri->setCursos(new Cursos("Programacion Orientada a Objetos")); echo "\n";
$matri->setCursos(new Cursos("Base de Datos II")); echo "\n";

foreach($matri -> getCursos() as $cursos)
{
    echo "Curso : ".$cursos->getNombre(); echo "\n";
}
