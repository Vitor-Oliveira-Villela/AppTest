<?php 

class ConnectionDB
{
    public function connect()
    {
        $host = "shinkansen.proxy.rlwy.net";
        $db   = "railway";
        $user = "root";
        $pass = "nsACvnSKjswPHBQnVARnQJbPzYpYidSA";

        try {
            $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            // Configura o PDO para lançar exceções em caso de erro
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Conexão bem-sucedida!";
        } catch (PDOException $e) {
            echo "Falha na conexão: " . $e->getMessage();
        }
    }
}