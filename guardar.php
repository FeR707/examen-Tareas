<?php

/*$conn = mysqli_connect("localhost", "root", "", "tareas");

$tarea = $_POST["tarea"]; 
$alumno = $_POST["alumno"];

$insert = mysqli_query($con,"INSERT INTO `asignada`(`id`, `tarea`, `alumnos`) VALUES ('','$tarea','$alumno')");

if(mysqli_query($conn,$sql)){
    echo "Datos registrados";
}
else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}*/



require("conexcion.php");

$tarea="";
$alumno="";

if (isset($_POST["tarea"])) {
    $tarea = $_POST["tarea"];   
}

if (isset($_POST["alumno"])) {
    $alumno = $_POST["alumno"];
}

$sql = "INSERT INTO asignada (id, tarea, alumnos) VALUES ('', '$tarea', '$alumno')";

if(mysqli_query($conn,$sql)){
    echo "Registro exitoso";
}
else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}