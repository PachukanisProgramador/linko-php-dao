<?php
namespace DAO;
use Exception;

class Conectar{
    function conectarDb(){
        try{
            $conexao = mysqli_init();
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            mysqli_options($connect, MYSQLI_OPT_CONNECT_TIMEOUT, 30);
            mysqli_ssl_set($conexao,NULL,NULL,'C:\xampp\htdocs\DAO\DigiCertGlobalRootCA.crt.pem',NULL,NULL);
            mysqli_real_connect($conexao,'banco-linko.mysql.database.azure.com','linko','Senac@123','linkodb',3306,MYSQLI_CLIENT_SSL);
            if($conexao){
                return $conexao;
            }
        }
        catch(Exception $erro){
        }
    }
}
$executar = new Conectar();
$executar->conectarDb();
?>