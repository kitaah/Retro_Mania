<main>
    <?php
        session_start(); 
        $_SESSION = array(); 
        session_destroy(); 
        exit(header('Location: index.php?p=admin_home'));
    ?>
</main>