<?php $homePage = 'http://localhost/DevSystem'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvimento de Sistemas</title>
    <link rel="stylesheet" href="<?= $homePage.'/assets/reset.css' ?>">
    <link rel="stylesheet" href="<?= $homePage.'/assets/style.css' ?>">
</head>
<body>
    <header>
        <nav id="headerMenu">
            <ul>
                <a href="<?= $homePage ?>">Página Inicial</a>
                
                <?php
                $pages = ['Contato' => 'contato', 'Tabela' => 'tabela'];
                foreach ($pages as $name => $file) {
                    echo '<a href="'.$homePage.'/pages/'.$file.'.php">'.$name.'</a>';
                }
                ?>
            </ul>
        </nav>
    </header>