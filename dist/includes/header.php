<header>
    <nav class="nav">
        <ul class="menu-nav">

            <li class="menu-nav__item"><a href="home.php" class="menu-nav__item--link">HOME</a></li>
            <li class="menu-nav__item"><a href="news.php" class="menu-nav__item--link">NEWS</a></li>
            <li class="menu-nav__item"><a href="contact.php" class="menu-nav__item--link">CONTACT</a></li>
            <li class="menu-nav__item"><a href="about.php" class="menu-nav__item--link">ABOUT</a></li>
            <li class="menu-nav__item"><a href="gallery.php" class="menu-nav__item--link">GALLERY</a></li>

            <?php if (!isset($_SESSION["user"])): ?>
                <li class="menu-nav__item auth">
                    <a href="register.php" class="menu-nav__item--link">REGISTER</a>
                </li>
                <li class="menu-nav__item auth">
                    <a href="login.php" class="menu-nav__item--link">LOGIN</a>
                </li>
            <?php else: ?>
                <li class="menu-nav__item auth">
                    <a href="admin.php" class="menu-nav__item--link">ADMIN</a>
                </li>
                <li class="menu-nav__item auth">
                    <a href="logout.php" class="menu-nav__item--link">LOGOUT</a>
                </li>
            <?php endif; ?>

        </ul>

        <button class="menu-btn">
            <span class="menu-btn__burger"></span>
            <span class="menu-btn__burger"></span>
            <span class="menu-btn__burger"></span>
        </button>
    </nav>
</header>
