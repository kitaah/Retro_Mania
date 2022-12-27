<?php
session_start();
$_SESSION = array();
session_destroy();
?><!DOCTYPE html>
<html lang="en">

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
    <title><?= htmlspecialchars($this->titleLayout) ?></title>
</head>

<body>
    <?php require_once $this->secretPage; ?>
</body>

</html>