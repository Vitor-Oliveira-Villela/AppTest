<?php

session_start();
require_once(__DIR__ . "/querys.php");
class Main
{
    public function Login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $querys = new Querys();

            if ($querys->validaLogin($username, $password))
            {
                $_SESSION['msg'] = "Login realizado com sucesso!";
                $_SESSION['msg_type'] = "success"; 
                header("Location: /screens/dashboard.html"); 
                exit();
            }
            else
            {
                $_SESSION['msg'] = "Usuário ou senha incorretos!";
                $_SESSION['msg_type'] = "error";
                header("Location: index.php"); 
                exit();
            }

        }
        else
        {
            return "A requisição de usuario e senha falhou!";
        }
    }
}