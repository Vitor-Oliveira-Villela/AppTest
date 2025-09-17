<?php 

class ConnectionDB
{
    public function connect()
    {
        $host = "shinkansen.proxy.rlwy.net";
        $port = "54366"; 
        $db   = "teste";
        $user = "root";
        $pass = "nsACvnSKjswPHBQnVARnQJbPzYpYidSA";

        try {
            $conn = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8", $user, $pass);
            // Configura o PDO para lançar exceções em caso de erro
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            die("Falha na conexão: " . $e->getMessage());
        }
    }
}
