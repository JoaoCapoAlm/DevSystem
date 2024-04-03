<?php include_once "../parts/header.php"; ?>

<h1>Lista 04</h1>
<h2>Exercício 02</h2>
<br>
<section>
    <h3 class="my-1">Enunciado</h3>
    <p>Faça um programa que tenha um vetor de 10 números reais e mostre-os na ordem inversa.</p>
</section>
<hr>
<br>

<section class="my-1">
    <h3 class="mb-1">Resolução</h3>
    <?php
    $array = [];
    for($i = 0; $i < 10; $i++){
        $array[$i] = number_format(mt_rand(-100, 100)/5.5, 3);
    }

    foreach (array_reverse($array) as $index => $elemento): ?>
        <div class="my-1">
            <p><strong>Posição:</strong> <?= $index ?></p>
            <p><strong>Elemento:</strong> <?= $elemento ?></p>
        </div>
    <?php endforeach; ?>
</section>
<?php include_once "../parts/footer.php"; ?>
