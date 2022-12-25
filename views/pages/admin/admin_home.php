<?php
    session_start(); 
    $_SESSION = array(); 
    session_destroy();
?>
<main class="admin-home__container text-center">
    <article>
        <h1 class="h1-model text-center">H<span>om</span>e</h1>
        <nav>
            <ul class="admin-home__navs">
                <li><a href="index.php?p=admin_registration"><i class="fa-solid fa-user-plus"></i>Sign Up</a></li>
                <li><a href="index.php?p=admin_login"><i class="fa-solid fa-arrow-right-to-bracket"></i>Sign In</a></li>
                <li><a href="index.php?p=home"><i class="fa-solid fa-r"></i>Website</a></li>
            </ul>
        </nav>
    </article>
</main>