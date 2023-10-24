<?php

$host = "sql10.freemysqlhosting.net";
$username = "sql10655599";
$password = "8FUxMuGI7c"; 
$databaseName = "sql10655599";
try {
    $db = new PDO("mysql:host=$host;dbname=$databaseName", $username, $password);
    // Habilitar erros PDO
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>

