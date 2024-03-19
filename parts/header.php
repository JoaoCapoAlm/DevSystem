<?php $GLOBALS['homePage'] = 'http://' . $_SERVER['HTTP_HOST'] . '/DevSystem' ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvimento de Sistemas</title>
    <link rel="stylesheet" href="<?= $GLOBALS['homePage'] . '/assets/reset.css' ?>">
    <link rel="stylesheet" href="<?= $GLOBALS['homePage'] . '/assets/style.css' ?>">
</head>
<body>
<header>
    <nav id="headerMenu">
        <ul>
            <li><a href="<?= $GLOBALS['homePage'] ?>" class="menuItem">Página Inicial</a></li>
            <li><a href="<?= $GLOBALS['homePage'] . '/lista01/' ?>" class="menuItem">Lista 01</a></li>
            <li><a href="<?= $GLOBALS['homePage'] . '/lista02/' ?>" class="menuItem">Lista 02</a></li>
            <li><a href="<?= $GLOBALS['homePage'] . '/lista03/' ?>" class="menuItem">Lista 03</a></li>
        </ul>
    </nav>
</header>
<main>