<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 22</h2>
    </div>
    <p>Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 27%.</p>
</section>
<hr><br>
<form method="get">
    <div class="my-1">
        <label for="txtValor">Valor:</label>
        <input type="text" id="txtValor" name="valor" />
    </div>

    <button type="submit">Enviar</button>
</form>

<?php if(isset($_GET['valor'])): ?>
    <section class="my-1">
        <?php $valor = $_GET['valor'];
        if(is_numeric($valor)){
            ?>
            <p><strong>Valor inicial:</strong> <?= $valor ?></p>
            <p><strong>Desconto:</strong> 27%</p>
            <p><strong>Valor com  o desconto:</strong> <?= $valor * 0.73 ?></p>
        <?php } else {
            echo '<p>Valor informado não é um número válido!</p>';
        } ?>
    </section>
<?php endif; ?>

<?php include_once "../parts/footer.php";
