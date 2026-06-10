<?php
require_once __DIR__ . '/Database.php';

class Login extends Dbh
{
    protected function getUser($login, $pwd)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE users_uid = ? OR users_email = ?;");

        if (!$stmt->execute(array($login, $login))) {
            $stmt = null;
            header("location: login.php?error=stmtfailed");
            exit();
        }

        $userData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!$userData || count($userData) === 0) {
            $stmt = null;
            header("location: login.php?error=wronglogin");
            exit();
        }

        $checkPwd = password_verify($pwd, $userData[0]["users_pwd"]);

        if ($checkPwd === false) {
            $stmt = null;
            header("location: login.php?error=wrongpassword");
            exit();
        }

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION["userid"] = (int) $userData[0]["users_id"];
        $_SESSION["useruid"] = $userData[0]["users_uid"];
        $_SESSION["is_admin"] =
            (isset($userData[0]["users_email"]) && $userData[0]["users_email"] === "admin@gmail.com")
            || (isset($userData[0]["users_uid"]) && $userData[0]["users_uid"] === "admin");

        $stmt = null;
    }
}
