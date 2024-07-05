<!doctype html>
<html lang="en">

<head>
    <title>Vostera - Login</title>
    <?php
    include('../head.php') ?>
</head>

<body>
    <div id="wrapper">
    <header>
    <?php
    include('../header.php') ?>
        </header>
        <main>
		<div class="login">
			<h1>Login for DMs</h1>
			<form action="authenticate.php" method="post">
            <div>
				<label for="username">
				</label>
				<input type="text" name="username" placeholder="Username" id="username"  autocomplete="off" required>
            </div>
            <div>
				<label for="password">
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
            </div>
				<input type="submit" value="Login">
			</form>
		</div>
        </main>
            <?php
            include('../footer.php') ?>
    </div>
</body>

</html>