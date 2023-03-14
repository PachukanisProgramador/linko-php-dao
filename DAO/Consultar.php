<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

use DAO\Conectar;
require_once("Conectar.php");

$conexaoDb = new Conectar();
$connect = $conexaoDb->conectarDb();

$phpQuery = "select * from Usuario";
$resultado = mysqli_query($connect,$phpQuery);

while($dados = mysqli_fetch_assoc($resultado)){
    $lista[] = $dados;
}

mysqli_close($connect);
echo json_encode($lista);
?>