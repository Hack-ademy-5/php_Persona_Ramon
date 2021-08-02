<?php
function insertarPersona($estudiantes, $docentes){
    $res = readline("Quieres insertar estudiante o docente:(e/d) ");
    if($res == 'e'){
        return insertarEstudiante($estudiantes);
    }
    else if($res == 'd'){
        return insertarDocente($docentes);
    }
    else{
        insertarPersona($estudiantes, $docentes);
    }
}

function insertarDocente($docentes){
    do{
        $nombre = readline("Insertar el nombre del profesor: ");
        $apellido = readline("Insertar el apellido del profesor: ");
        $edad = readline("Insertar la edad del profesor: ");
        $asignatura = readline("Insertar la asignatura que imparte el profesor:");
        $docentes[] = new Docente($nombre, $apellido, $edad, $asignatura);
        $res = strtolower(readline("Indique si desea añadir otro profesor: (si/no)"));
    }while($res == 'si' || $res == 's');
    return $docentes;
}

function insertarEstudiante($estudiantes){
    do{   
        $nombre = readline("Insertar el nombre del alumno: ");
        $apellido = readline("Insertar el apellido del alumno: ");
        $edad = readline("Insertar la edad del alumno: ");
        $asignaturas = readline("Insertar las asignaturas que cursa el alumno:");
        $estudiantes[] = new Estudiante($nombre, $apellido, $edad, $asignaturas);
        $res = strtolower(readline("Indique si desea añadir otro alumno: (si/no)"));
    }while($res == 'si' || $res == 's');
    return $estudiantes;
}