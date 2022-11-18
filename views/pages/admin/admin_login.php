<?php
    session_start(); 
    $_SESSION = array(); 
    session_destroy(); 
?>
<main class="admin-login__container">
    <article>
        <h1 class="h1-model text-center">L<span>ogi</span>n</h1>

        <article class="admin-login__form">
            <form method="POST" action="index.php?page=add_admin_login" id="admin-login__form-content" autocomplete="off">
                <label for="admin-login-username" class="line-break-after">Username</label>
                <input type="text" id="admin-login-username" name="admin_username" placeholder="Username...">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <label for="admin-login-password" class="line-break-after">Password</label>
                <input type="password" id="admin-login-password" name="password" placeholder="Password...">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <p id="admin-login-message" class="text-center">Complete correctly all the fields</p>

                <input id="admin-login__submit" class="margin-auto" type="submit" value="SIGN IN">
            </form>
        </article>
    </article>
</main>