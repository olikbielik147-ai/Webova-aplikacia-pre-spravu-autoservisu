<?php
require_once __DIR__ . '/signup.class.php';

class SignupContr extends Signup
{
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email)
    {
        parent::__construct();
        $this->uid = trim($uid);
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = trim($email);
    }

    public function signupUser()
    {
        if ($this->emptyInput() === false) {
            header("location: signup.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUid() === false) {
            header("location: signup.php?error=invaliduid");
            exit();
        }
        if ($this->invalidEmail() === false) {
            header("location: signup.php?error=invalidemail");
            exit();
        }
        if ($this->pwdMatch() === false) {
            header("location: signup.php?error=passwordsdontmatch");
            exit();
        }
        if ($this->uidNotTakenCheck() === false) {
            header("location: signup.php?error=useralreadytaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
        header("location: login.php?signup=success");
        exit();
    }

    private function emptyInput()
    {
        return !empty($this->uid) && !empty($this->pwd) && !empty($this->pwdRepeat) && !empty($this->email);
    }

    private function invalidUid()
    {
        return preg_match("/^[a-zA-Z0-9]*$/", $this->uid) === 1;
    }

    private function invalidEmail()
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }

    private function pwdMatch()
    {
        return $this->pwd === $this->pwdRepeat;
    }

    private function uidNotTakenCheck()
    {
        return $this->checkUser($this->uid, $this->email);
    }
}
