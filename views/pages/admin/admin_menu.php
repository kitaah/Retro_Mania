<?php
session_start();
$this->sessionOnlyAdmin();
?>

<main class="admin-menu__container text-center">
    <article>
        <h1 class="h1-model text-center">M<span>en</span>u</h1>
        <article>
            <p><?= 'Welcome ' . htmlspecialchars($_SESSION['admin_username']) . ' 😉'; ?></p>
            <nav>
                <ul class="admin-menu__navs">
                    <li><a href="index.php?p=admin_collections_list"><i class="fa-solid fa-list"></i>Collections</a></li>
                    <li><a href="index.php?p=admin_caps_catalog"><i class="fa-solid fa-clipboard-list"></i>Caps catalog</a></li>
                    <li><a href="index.php?p=admin_employees_list"><i class="fa-solid fa-users"></i>Employees</a></li>
                    <li><a href="index.php?p=admin_winners_list"><i class="fa-solid fa-trophy"></i>Winners</a></li>
                </ul>
            </nav>
        </article>
    </article>
</main>