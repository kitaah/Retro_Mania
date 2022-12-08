<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <script src="https://kit.fontawesome.com/ce80081662.js" crossorigin="anonymous" defer></script>
    <link type="text/css" rel="stylesheet" href="css/style.min.css?v=<?php echo time(); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Admin Dashboard | Retro Mania</title>
</head>

<body>
    <header class="header__dashboard flex-center">
        <p><a href="index.php?page=admin_logout"><img src="medias/img/layouts/admin_dashboard_sun.png" class="sun__img" alt="admin dashboard logo"></a></p>
        <p><img src="medias/img/layouts/admin_dashboard_logo.png" class="dashboard-logo__img" alt="admin dashboard logo"></p>
    </header>

    <?php require_once $this->adminPage; ?>

    <script src="js/app.min.js"></script>
</body>

</html>