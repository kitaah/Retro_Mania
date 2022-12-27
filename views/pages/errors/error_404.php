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
    <meta name="robots" content="noindex">
    <link type="text/css" rel="stylesheet" href="css/style.min.css?v=<?= htmlspecialchars(time()); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Error 404 | Retro Mania</title>
</head>

<body>
    <main>
        <article class="error404__container text-center margin-auto">
            <h1>Error 404</h1>
            <p class="error404__page-not-found">Page not found</p>
            <p class="error404__looking-for">We can't find the page you are looking for 😥</p>
            <p><img class="sun-error-404__img margin-auto" src="medias/img/errors/sun.png" alt="sun image" /></p>
        </article>
    </main>
</body>

</html>