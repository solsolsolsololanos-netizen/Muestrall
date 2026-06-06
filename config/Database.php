<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

class Database {

    private $host = "localhost";
    private $user = "root";
    private $pass= ""; 
    private $db = "colegio";

    public  function conectar() {

    $conexion = new mysqli(
        $this->host,
        $this->user,
        $this->pass,
        $this->db
    );

    if ($conexion->connect_error) {
        die("Error de conexión: ");
    }

    return $conexion;
    }
}



?>

</body>
</html>