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

            <?php
            $pages = ['Contato' => 'contato', 'Tabela' => 'tabela'];
            foreach ($pages as $name => $file) {
                echo '<li><a href="' . $GLOBALS['homePage'] . '/pages/' . $file . '" class="menuItem">' . $name . '</a></li>';
            }
            ?>

            <li>
                <button type="button" onclick="displaySubMenu('subMenuExer')"
                        id="btnMenuExer"
                        class="menuItem hasSubmenu"
                >Exercícios</button>
                <ul id="subMenuExer" class="hide">
                    <li><a href="<?= $GLOBALS['homePage'] . '/exercicios/lista01/' ?>">Lista 01</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<main>