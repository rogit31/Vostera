<?php $current_page = basename($_SERVER['REQUEST_URI'], '.php');
$menu_items = [
    'lore' => 'Lore',
    'maps' => 'Maps',
    'playercharacters' => 'PCs',
    'houserules' => 'House Rules',
]
 ?>

<header>
    <a href="/home"><img class="logo_absolute" src="/media/images/academylogo.svg" alt="Logo of the Academy"></a>
    <nav class="navbar">
        <a href="/home"><img class="logo" src="/media/images/academylogo.svg" alt="Logo of the Academy"></a>
        <ul class="nav-menu">
            <?php foreach($menu_items as $page => $pageTitle): ?>
            <li class="nav-item <?php echo $current_page == $page ? 'active-page' : ''; ?>">
                <a href="/<?php echo $page;?>" class="nav-link"><?php echo $pageTitle; ?></a>
            </li>
            <?php endforeach?>

            <?php
            if (!isset($_SESSION['loggedin'])) : ?>
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
            <?php endif; ?>
            <?php
            if (isset($_SESSION['loggedin'])) : ?>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">Logout</a>
                </li>
            <?php endif; ?>
        </ul>
        <label for="searchbar"></label>
        <input type="text" id="searchbar" autocomplete="off" placeholder="Search for articles...">
        <div id="searchresults"></div>

        <div id="topRightWrapper">
            <img id="loupe" src="/media/images/loupe.svg" alt="loupe">
            <img id="eye" src="/media/images/eye-svgrepo-com.svg" alt="icon of an eye">
        </div>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>