<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index(): string
    {
        return view('welcome_message');
    }

    public function obtenerEstudiantePorId($idEstudiante)
{   
    $estudiantes = array(
        1 => array(
            'IdEstudiante' => 1,
            'Nombre' => 'Juan',
            'Apellido' => 'Pérez',
            'Edad' => 22,
            'Carrera' => 'Ingeniería Civil',
            'CreditosCursados' => 70,
            'Estado' => 'Activo',
        ),
        2 => array(
            'IdEstudiante' => 2,
            'Nombre' => 'María',
            'Apellido' => 'González',
            'Edad' => 23,
            'Carrera' => 'Medicina',
            'CreditosCursados' => 80,
            'Estado' => 'Inactivo',
        ),
        3 => array(
            'IdEstudiante' => 3,
            'Nombre' => 'Carlos',
            'Apellido' => 'Rodríguez',
            'Edad' => 24,
            'Carrera' => 'Derecho',
            'CreditosCursados' => 90,
            'Estado' => 'Activo',
        ),
        4 => array(
            'IdEstudiante' => 4,
            'Nombre' => 'Ana',
            'Apellido' => 'Martínez',
            'Edad' => 25,
            'Carrera' => 'Psicología',
            'CreditosCursados' => 100,
            'Estado' => 'Inactivo',
        )        
    );

    if (isset($estudiantes[$idEstudiante])) {
        return $this->response->setJson($estudiantes[$idEstudiante]);
    } else {
        return $this->response->setJson(array('mensaje' => 'Estudiante no encontrado'));
    }
}

public function listarCursos()
{
 
    $cursos = array(
        1 => array(
            'IdCurso' => 1,
            'Nombre' => 'Estructura de datos',
            'Creditos' => 3,
            'Carrera' => 'Ing Informatica',
        ),
       
    );

    return $this->response->setJson($cursos);
}

public function buscarCursosPorCarrera($carrera)
{   
    $cursos = array(
        1 => array(
            'IdCurso' => 1,
            'Nombre' => 'Curso1',
            'Creditos' => 3,
            'Carrera' => $carrera,
        ),
    );
    return $this->response->setJson($cursos);
}

}
