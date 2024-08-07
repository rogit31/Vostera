<?php

namespace App\Controllers;
use App\Config\Database;
use PDO;
use PDOException;

class AuthController{

    public function processLoginForm(){
        $db = new Database();
        $conn = $db->connect();
        //TODO: MAKE THIS FORM BETTER BRO THIS SHIT SUUUUUCKS

        // Check if the data from the login form was submitted
        if (!isset($_POST['username'], $_POST['password'])) {
            exit('Please fill both the username and password fields.');
        }
        $sql = "SELECT id, password FROM accounts WHERE username = :username";

        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
            $stmt->execute();

            // If it returns at least one row:
            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $id = $row['id'];
                $hashed_password = $row['password'];

                // Verify the password
                if (password_verify($_POST['password'], $hashed_password)) {

                    // Create sessions
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['user_id'] = $id;
                    session_regenerate_id();

                    header('Location: /home');
                    exit;
                } else {
                    // Incorrect password
                    echo 'Incorrect username and/or password!';
                }
            } else {
                // Incorrect username
                echo 'Incorrect username and/or password!';
            }
        } catch (PDOException $e) {
            exit('Error: ' . $e->getMessage());
        } finally {
            // Close the statement
            if (isset($stmt)) {
                $stmt->closeCursor();
            }
        }
    }
    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        header('Location: /home');
    }
    public function processRegister()
    {
        // Clear all registration error flags
        $this->clearRegisterErrors();

        // Check if required fields are provided
        if (!isset($_POST['username'], $_POST['password'], $_POST['checkPassword'], $_POST['email'])) {
            $this->setRegisterError('input_missing', "You're missing some inputs.");
            header('Location: /register');
            exit;
        }

        // Check if passwords match
        $password = $_POST['password'];
        $password2 = $_POST['checkPassword'];
        if ($password != $password2) {
            $this->setRegisterError('password_mismatch', "Passwords don't match.");
            header('Location: /register');
            exit;
        }

        // Check password complexity
        if (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
            $this->setRegisterError('password_complexity', "Password must be at least 8 characters long and include at least one uppercase letter and one special character.");
            header('Location: /register');
            exit;
        }

        // Check against common weak passwords
        $commonWeakPasswords = ['password', '12345678'];
        if (in_array(strtolower($password), $commonWeakPasswords)) {
            $this->setRegisterError('weak_password', "Common weak password detected. Please choose a stronger password.");
            header('Location: /register');
            exit;
        }

        // Validate email
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        if (!$email) {
            $this->setRegisterError('invalid_email', "Invalid email format.");
            header('Location: /register');
            exit;
        }

        // Check if username is already taken
        $username = $_POST['username'];
        if ($this->isUsernameTaken($username)) {
            $this->setRegisterError('username_taken', "Username is already taken. Please choose a different username.");
            header('Location: /register');
            exit;
        }

        // Check invite password
        if (!$this->checkInvitePass($_POST['invitePassword'])) {
            $this->setRegisterError('invite_password', "Invalid invite code.");
            header('Location: /register');
            exit;
        }

        // Hash password and insert new account
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
        $db = new Database();
        $conn = $db->connect();
        $stmt = $conn->prepare("INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)");

        try {
            $stmt->execute([$username, $hashedPassword, $email]);
        } catch (PDOException $e) {
            exit('Error: ' . $e->getMessage());
        }

        $_SESSION['register_success'] = true;
        header('Location: /login');
        exit;
    }

    public function checkInvitePass($invitePass)
    {
        $db = new Database();
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM invitePass");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return false;
        }

        $hashedPassFromDB = $row['value'];
        return password_verify($invitePass, $hashedPassFromDB);
    }

    private function clearRegisterErrors()
    {
        $_SESSION['register_errors'] = [
            'input_missing' => false,
            'password_mismatch' => false,
            'password_complexity' => false,
            'weak_password' => false,
            'username_taken' => false,
            'invite_password' => false,
            'invalid_email' => false,
        ];
    }

    private function setRegisterError($errorType, $message)
    {
        $_SESSION['register_errors'][$errorType] = true;
        $_SESSION['register_errors'][$errorType . '_message'] = $message;
    }

    private function isUsernameTaken($username)
    {
        $db = new Database();
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM accounts WHERE username = ?");
        $stmt->execute([$username]);
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);
        return !!$existingUser;
    }

}

