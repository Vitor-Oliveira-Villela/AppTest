<?php

require_once("includes/connection.php");

class Querys
{

    private $conn = new ConnectionDB();

    public function validaLogin($username, $password)
    {
        $this->conn->connect();

        $qry = $this->conn->prepare("SELECT * FROM users WHERE username = :username");
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