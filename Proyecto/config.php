<?php

$host = "localhost";
$username = "root";
$password = "";
$dbName = "Proyecto1";

// DSN para MySQL
$dsn = "mysql:host=$host;dbname=$dbName";

try {
    $conn = new PDO($dsn, $username, $password);
    // Establecer el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // ... aquí iría el resto de tu código ...

} catch(PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}

?>
