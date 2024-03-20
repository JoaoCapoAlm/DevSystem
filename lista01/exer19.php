<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 18</h2>
    </div>
    <p>Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 9%.</p>
</section>
<hr><br>
<form method="get">
    <div class="my-1">
        <label for="txtValor">Valor:</label>
        <input type="text" id="txtValor" name="valor" />
    </div>

    <button type="submit">Enviar</button>
</form>

<section class="my-1">
    <?php if(isset($_GET['valor'])):
        $valor = $_GET['valor'];
        if(is_numeric($valor)){
    ?>
            <p>Valor inicial: <?= $valor ?></p>
            <p>Desconto: 9%</p>
            <p>Valor com  o desconto: <?= $valor * 0.91 ?></p>
        <?php } else {
            echo '<p>Valor informado não é um número válido!</p>';
        }
    endif; ?>
</section>
<?php include_once "../parts/footer.php";
