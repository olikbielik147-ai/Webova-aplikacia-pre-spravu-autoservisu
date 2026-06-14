<?php
require_once __DIR__ . '/Database.php';

class Signup extends Dbh
{
    protected function setUser($uid, $pwd, $email)
    {
        $stmt = $this->connect()->prepare("INSERT INTO users (users_uid, users_pwd, users_email) VALUES(?,?,?);");
        $hashPedwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $hashedPwd, $email))) {
            $stmt = null;
            header("location: signup.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($uid, $email): bool
    {
        $stmt = $this->connect()->prepare("SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;");

        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: signup.php?error=stmtfailed");
            exit();
        }
        $resultData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return count($resultData) === 0;
    }
}
