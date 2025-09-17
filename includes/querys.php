<?php

require_once(__DIR__ . "/connection.php");

class Querys
{
    public function validaLogin($username, $password)
    {
        $conn = new ConnectionDB();
        $pdo = $conn->connect();

        $qry = $pdo->prepare("SELECT * FROM users WHERE username = :username and password = :password");
        $qry->execute(["username" => $username, "password" => $password] );
        $result = $qry->fetch(PDO::FETCH_ASSOC);

        if ($result) 
        {
            $lRet = true;
        } 
        else 
        {
            $lRet = false;
        }

        return $lRet;
    } 
    /*
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
    */
}