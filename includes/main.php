<?php

session_start();
require_once("includes/querys.php");
class Main
{
    private $querys = new Querys();

    public function Login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->querys->validaLogin($username, $password))
            {
                $_SESSION['msg'] = "Login realizado com sucesso!";
                $_SESSION['msg_type'] = "success"; 
                header("Location: screens/dashboard.html"); 
                exit();
            }
            else
            {
                $_SESSION['msg'] = "Usuário ou senha incorretos!";
                $_SESSION['msg_type'] = "error";
                header("Location: index.html"); 
                exit();
            }

        }
        else
        {
            return "A requisição de usuario e senha falhou!";
        }
    }
}