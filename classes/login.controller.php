<?php
require_once __DIR__ . '/LoginModel.php';

class LoginContr extends Login
{
    private $login;
    private $pwd;

    public function __construct($login, $pwd)
    {
        parent::__construct();
        $this->login = trim($login);
        $this->pwd = $pwd;
    }

    public function loginUser()
    {
        if ($this->emptyInput() === false) {
            header("location: login.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->login, $this->pwd);
        header("location: index.php?login=success");
        exit();
    }

    private function emptyInput()
    {
        return !empty($this->login) && !empty($this->pwd);
    }
}
