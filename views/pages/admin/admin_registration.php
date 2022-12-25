<?php
    session_start(); 
    $_SESSION = array(); 
    session_destroy(); 
?>
<main class="admin-register__container">
    <article>
        <h1 class="h1-model text-center">Reg<span>istra</span>tion</h1>

        <article class="admin-register__form">
            <form method="POST" action="index.php?p=add_new_admin" id="admin-register__form-content" autocomplete="off">
                <label for="admin-register-username" class="line-break-after">Username</label>
                <input type="text" id="admin-register-username" name="admin_username" placeholder="Username...">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <label for="admin-register-password" class="line-break-after">Password</label>
                <input type="password" id="admin-register-password" name="password" placeholder="Password...">
                <i class="fa-solid fa-circle-check check-form"></i>
                <i class="fa-regular fa-circle-xmark xmark-form"></i><br />

                <p id="admin-register-message" class="text-center">Complete correctly all the fields</p>

                <input id="admin-register__submit" class="margin-auto" type="submit" value="SIGN UP">
            </form>
        </article>

        <aside class="admin-register__instructions margin-auto">
            <i class="fa-solid fa-triangle-exclamation flex-center"></i>
            <h3 class="text-center">Read the instructions below</h3>
            <ul>
                <li><span>Username:</span> only letters, numbers, hyphens and underscores allowed.</li>
                <li><span>Password:</span> at least one digit, at least 2 special characters, at least 1 alphabetic character, no blank space.</li>
            </ul>
        </aside>
    </article>
</main>