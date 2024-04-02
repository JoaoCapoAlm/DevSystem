<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 25</h2>
    </div>
    <p>Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.</p>
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
    if(is_numeric($valor)):
        $valorFinal = $valor * 1.16;
?>
    <p><strong>Valor inicial:</strong> R$ <?= number_format($valor, 2, ',', '.') ?></p>
    <p><strong>Valor parcela:</strong> R$ <?= number_format($valorFinal / 10, 2, ',', '.') ?></p>
    <p><strong>Valor final:</strong> R$ <?= number_format($valorFinal, 2, ',', '.') ?></p>
    <?php else: ?>
        <p>Valor informado não é um número válido!</p>
    <?php endif ?>
</section>
<?php endif; ?>
<?php include_once "../parts/footer.php";
