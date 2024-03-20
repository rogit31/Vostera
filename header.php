<header>
    <a href="/index.php"><img class="logo_absolute" src="/media/academylogo.svg" alt="Logo of the Academy"></a>
    <nav class="navbar">

        <ul class="nav-menu">

            <li><a href="/index.php"><img class="logo" src="/media/academylogo.svg" alt="Logo of the Academy"></a></li>
            <li class="nav-item">
                <a href="/html/lore.php" class="nav-link">Lore</a>
            </li>
            <li class="nav-item">
                <a href="/html/maps.php" class="nav-link">Maps</a>
            </li>
            <li class="nav-item">
                <a href="/html/playercharacters.php" class="nav-link">PCs</a>
            </li>
            <li class="nav-item">
                <a href="/html/houserules.php" class="nav-link">House Rules</a>
            </li>
            <li class="nav-item">
                <a href="/html/contact.php" class="nav-link">Contact</a>
            </li>
            <?php
            session_start();
            if (!isset($_SESSION['loggedin'])) : ?>
                <li class="nav-item">
                    <a href="/html/login.php" class="nav-link">Login</a>
                </li>
            <?php endif; ?>
            <?php
            if (isset($_SESSION['loggedin'])) : ?>
                <li class="nav-item">
                    <a href="/html/logout.php" class="nav-link">Logout</a>
                </li>
            <?php endif; ?>

        </ul>
         <img id="eye" src="/media/eye-svgrepo-com.svg" alt="">
        

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>