<main>
    <?php
        session_start(); 
        $_SESSION = array(); 
        session_destroy(); 
        exit(header('Location: index.php?page=admin_home'));
    ?>
</main>