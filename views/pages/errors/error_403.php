<?php
session_start();
$_SESSION = array();
session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://retro-mania.melanieroussy.fr/css/style.min.css?v=<?php echo time(); ?>">
    <link rel=" apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Error 403 | Retro Mania</title>
</head>

<body>
    <main>
        <article class="error403__container text-center margin-auto">
            <h1>Error 403</h1>
            <p class="error403__forbidden">Forbidden</p>
            <p class="error403__no-permission">You don't have permission <span class="line-break-before">to access this resource 😥</span></p>
            <p><img class="sun-error-403__img margin-auto" src="https://retro-mania.melanieroussy.fr/medias/img/errors/sun.png" alt="sun image" /></p>
        </article>
    </main>
</body>

</html>