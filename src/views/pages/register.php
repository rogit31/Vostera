<!doctype html>
<html lang="en">

<head>
    <title>Vostera - Register</title>
    <?php include __DIR__ . '/../components/head.php' ?>
</head>

<body>
<div id="wrapper">
    <?php include_once __DIR__ . '/../components/sideBar.php'; ?>
    <?php include __DIR__ . '/../components/header.php' ?>
    <main>
        <div class="auth">
            <h1>Register</h1>

            <?php if (isset($_SESSION['register_errors'])): ?>
                <?php foreach ($_SESSION['register_errors'] as $errorType => $value): ?>
                    <?php if ($value): ?>
                        <div class="error-message">
                            <span class="warning"><?php echo $_SESSION['register_errors'][$errorType . '_message']; ?></span>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <form action="register/process" method="post">
                <div class="formElement">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username" id="username" autocomplete="off">
                </div>
                <div class="formElement">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" id="password">
                    <label for="checkPassword">Confirm Password</label>
                    <input type="password" name="checkPassword" placeholder="Type password again" id="checkPassword">
                </div>
                <div class="formElement">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Your email" id="email">
                </div>
                <div class="formElement">
                    <label for="invitePassword">Invite</label>
                    <input type="password" name="invitePassword" placeholder="Your invite code" id="invitePassword">
                </div>
                <input type="submit" value="Register">
            </form>
        </div>
    </main>
</div>
</body>

</html>
