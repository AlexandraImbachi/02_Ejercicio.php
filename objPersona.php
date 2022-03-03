<?php
require_once("01_Persona.php");
require_once("01_Estudiante.php");
require_once("01_Profesor.php");

echo "<h2> Llamado a la clase persona </h2><br>";
$objPersona = new Persona("Camila", 3142156177, "cami@gmail.com");
$objPersona->getDatospersona();
print_r('<pre>');
print_r($objPersona);
print_r('</pre>');

echo "Nombre: " . $objPersona->nombre."<br>";
echo "Celular: " . $objPersona->getCelular()."<br>";
echo "Email: " . $objPersona->email."<br>";
print_r('</pre>');

echo "<h2> Llamado a la clase Estudiante </h2><br>";
$objEstudiante = new Estudiante("Angela", 3145216782,"angel@gmail.com", "Decimo");
$objEstudiante->getDatospersona();
print_r('<pre>');
print_r($objEstudiante);
print_r('</pre>');


echo "Nombre: " . $objEstudiante->nombre."<br>";
echo "Celular: " . $objEstudiante->getCelular()."<br>";
echo "Email: " . $objEstudiante->email."<br>";
echo "Grado: " . $objEstudiante->grado."<br>";
print_r('</pre>');

echo "<h2> Llamado a la clase Profesor </h2><br>";
$objProfesor = new Profesor("Santiago", 3145214628,"santi@gmail.com","Quimica");
$objProfesor->getDatospersona();
print_r('<pre>');
print_r($objProfesor);
print_r('</pre>');


echo "Nombre: " . $objProfesor->nombre."<br>";
echo "Celular: " . $objProfesor->getCelular()."<br>";
echo "Email: " . $objProfesor->email."<br>";
echo "Asignatura: " . $objProfesor->asignatura."<br>";







?>