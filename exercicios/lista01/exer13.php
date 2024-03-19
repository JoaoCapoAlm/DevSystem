<?php include_once "../../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 13</h2>
    </div>
    <p>Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável media
        e exiba para o usuário o resultado.</p>
</section>
<hr>
<form method="get">
    <div class="my-1">
        <label for="txtPrimeiroNumero">Primeiro número:</label>
        <input type="text" id="txtPrimeiroNumero" name="val1" />
    </div>
    <div class="my-1">
        <label for="txtSegundoNumero">Segundo número:</label>
        <input type="text" id="txtSegundoNumero" name="val2" />
    </div>
    <div class="my-1">
        <label for="txtTerceiroNumero">Terceiro número:</label>
        <input type="text" id="txtTerceiroNumero" name="val3" />
    </div>
    <button type="submit">Enviar</button>
</form>

<section class="my-1">
    <h3><strong>Resposta</strong></h3>
    <?php if(isset($_GET['val1']) && isset($_GET['val2']) && isset($_GET['val3'])): ?>
        <?php if(is_numeric($_GET['val1']) && is_numeric($_GET['val2']) && is_numeric($_GET['val3'])){
            $media = ($_GET['val1'] + $_GET['val2'] + $_GET['val3']) / 3;
            ?>
            <p>val1 = <?= $_GET['val1'] ?></p>
            <p>val2 = <?= $_GET['val2'] ?></p>
            <p>val3 = <?= $_GET['val3'] ?></p>
            <p>Média: <?= $media ?></p>
        <?php } else {
            echo '<p>Valor informado não é um número!</p>';
        }
    endif; ?>
</section>
<?php include_once "../../parts/footer.php";
