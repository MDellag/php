<?php
header('Content-Type: application/json');
// include './usuarios.php';
/* use Clases\Usuario;

$usuario = new Usuario("mail", "pass", "type"); */
$user = "root";
$password = "";

try {
    $dao = new PDO('mysql:host=localhost; dbname=clasesql', $user, $password);
    echo "se Conecto correctamente a la DAO";

    $query = $dao->query("SELECT * FROM alumnos"); // esto es una query.. asi de simple
    
    echo "cantidad de filas" . $query->rowCount() . "";

    $alumnos = $query->fetchAll(PDO::FETCH_OBJ); // te devuelve un array con 2 resultados.. si le agregamos ese parametro, trae bien todo
    //Buscar los diferentes tipos de PDO::Fetch

    while($fila = $query->fetch(PDO::FETCH_OBJ)){
        echo json_encode($fila);
    }

    // echo json_encode($alumnos);

} catch (\Throwable $th) {
    echo "no se pudo conectar al a ddbb";
}

