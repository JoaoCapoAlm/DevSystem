<?php include_once "../parts/header.php"; ?>

<h1>Lista 04</h1>
<h2>Exercício 01</h2>
<br>
<section>
    <h3 class="my-1">Enunciado</h3>
    <p>Faça um programa que tenha um vetor de 5 números inteiros e mostre-os.</p>
</section>
<hr>
<br>

<section class="my-1">
    <h3 class="my-1">Resolução</h3>
    <?php
    $array = [1, 3, 5, 7, 9];
    foreach ($array as $index => $elemento): ?>
        <div class="my-1">
            <p><strong>Posição:</strong> <?= $index ?></p>
            <p><strong>Elemento:</strong> <?= $elemento ?></p>
        </div>
    <?php endforeach; ?>
</section>
<?php include_once "../parts/footer.php"; ?>
