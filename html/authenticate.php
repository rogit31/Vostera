<?php
include('../db.php');

// Check if the data from the login form was submitted
if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please fill both the username and password fields.');
}

$sql = "SELECT id, password FROM accounts WHERE username = :username";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
    $stmt->execute();

    // If it returns at least one row:
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $id = $row['id'];
        $hashed_password = $row['password'];

        // Verify the password
        if (password_verify($_POST['password'], $hashed_password)) {
            // Verification success! User has logged-in!
            // Create sessions
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            session_regenerate_id();
            header('Location: ../index.php');
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
?>

