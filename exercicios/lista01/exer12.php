<?php include_once "../../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 12</h2>
    </div>
    <p>Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.</p>
</section>
<hr>
<form method="get">
    <div class="my-1">
        <label for="txtPrimeiroNumero">Primeiro número:</label>
        <input type="text" id="txtPrimeiroNumero" name="primeiroNumero" />
    </div>
    <div class="my-1">
        <label for="txtSegundoNumero">Segundo número:</label>
        <input type="text" id="txtSegundoNumero" name="segundoNumero" />
    </div>
    <button type="submit">Enviar</button>
</form>
<section class="my-1">
    <h3><strong>Resposta</strong></h3>
    <?php if(!isset($_GET['primeiroNumero']) && !empty($_GET['segundoNumero'])): ?>
        <?php if(is_numeric($_GET['primeiroNumero']) && is_numeric($_GET['segundoNumero'])){
            $calculo = ($_GET['primeiroNumero'] + $_GET['segundoNumero']) * $_GET['primeiroNumero'];
        ?>
            <p>(<?= $_GET['primeiroNumero'] ?> + <?= $_GET['segundoNumero'] ?>) * <?= $_GET['primeiroNumero'] ?> = <?= $calculo ?></p>
        <?php } else {
            echo '<p>Valor informado não é um número!</p>';
        }
    endif; ?>
</section>
<?php include_once "../../parts/footer.php"; ?>
