<?php

require_once("includes/connection.php");

class Querys
{
    public function validaLogin($username, $password)
    {
        $conn = new ConnectionDB();
        $pdo = $conn->connect();

        $qry = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $qry->execute(["username" => $username]);
        $result = $qry->fetch(PDO::FETCH_ASSOC);

        if ($result && password_verify($password, $result['password'])) 
        {
            $lRet = true;
        } 
        else 
        {
            $lRet = false;
        }

        return $lRet;
    } 
}