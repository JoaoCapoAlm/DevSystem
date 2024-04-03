<?php include_once "../parts/header.php"; ?>

<h1>Lista 04</h1>
<h2>Exercício 03</h2>
<br>
<section>
    <h3 class="my-1">Enunciado</h3>
    <p>Faça um programa que receba 4 notas, mostre as notas e a média na tela.</p>
</section>
<hr>
<br>

<section class="my-1">
    <h3 class="mb-1">Resolução</h3>
    <form method="get">
        <?php $qtdNotas = 4;
        $prefixNameNota = 'nota';
        for ($i = 1; $i <= $qtdNotas; $i++): ?>
            <div class="my-1">
                <label for="txtNota<?= $i ?>">Nota <?= $i ?></label>
                <input type="text" id="txtNota<?= $i ?>" name="<?= $prefixNameNota.$i ?>" required />
            </div>
        <?php endfor; ?>
        <button type="submit">Enviar</button>
    </form>

    <?php if(!empty($_GET)):
    $array = [];
    $soma = 0;
    for ($i = 1; $i <= $qtdNotas; $i++) {
        $array[] = $_GET[$prefixNameNota.$i];
        $soma += $_GET[$prefixNameNota.$i];
    }
    ?>
    <div class="my-1">
    <?php foreach ($array as $index => $elemento): ?>
        <p><strong>Nota <?= ($index + 1) ?>:</strong> <?= $elemento ?></p>
    <?php endforeach; ?>
    <p><strong>Média:</strong> <?= $soma/$qtdNotas ?></p>
    <?php endif ?>
    </div>
</section>
<?php include_once "../parts/footer.php"; ?>
