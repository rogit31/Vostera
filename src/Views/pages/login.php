<!doctype html>
<html lang="en">

<head>
    <title>Vostera - Login</title>
    <?php include __DIR__ . '/../components/head.php' ?>
</head>

<body>
    <div id="wrapper">
        <?php  include_once  __DIR__ . '/../components/sideBar.php'; ?>
        <?php include __DIR__ . '/../components/header.php'?>
        <main>
		<div class="auth">
			<h1>Login</h1>
			<form action="login/process" method="post">
            <div class="formElement">
				<label for="username">
				</label>
				<input type="text" name="username" placeholder="Username" id="username"  autocomplete="off" required>
            </div>
            <div class="formElement">
				<label for="password">
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
            </div>
				<input type="submit" value="Login">
			</form>
            <p id="registerText">Don't have an account? <a href="/register">register</a></p>
		</div>
        </main>
    </div>
</body>

</html>