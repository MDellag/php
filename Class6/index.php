<?php
header('Content-Type: application/json');
require __DIR__ . '/vendor/autoload.php'; //este es el encargado de autolodear todo desde el composer.json

include "./Sql.php";


use Clases\Usuario;
use Controllers\UserController;

$contr = new UserController;
echo $contr->ver = "v1.09";

$usuario = new Usuario("asd", "adwqe", "adm");





$sqlCon = new DAO("clasesql");

$getDao = "SELECT * FROM alumnos";
$insert = "INSERT INTO alumnos (apellido, nombre, dni) VALUES ('go', 'jython', 42334863)";
$update = "UPDATE alumnos set dni = 42334863 where id = '5' ";

// $sqlCon->queryRunner($getDao);

// echo json_encode($sqlCon->queryRunner($getDao));









/*  
    // echo "cantidad de filas" . $query->rowCount() . "";

    $alumnos = $query->fetchAll(PDO::FETCH_OBJ); // te devuelve un array con 2 resultados.. si le agregamos ese parametro, trae bien todo
    //Buscar los diferentes tipos de PDO::Fetch

    while($fila = $query->fetch(PDO::FETCH_OBJ)){
        //este while no funca..
        echo json_encode($fila);
        echo "As";
    }
 */




