<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 21</h2>
    </div>
    <p>Escreva um algoritmo que calcule e apresente o volume de uma caixa retangular por meio da seguinte fórmula:
        <code>volume = comprimento x largura x altura</code></p>
</section>
<hr><br>
<form method="get">
    <div class="my-1">
        <label for="txtComprimento">Comprimento:</label>
        <input type="text" id="txtComprimento" name="comprimento" />
    </div>
    <div class="my-1">
        <label for="txtLargura">Largura:</label>
        <input type="text" id="txtLargura" name="largura" />
    </div>
    <div class="my-1">
        <label for="txtAltura">Altura:</label>
        <input type="text" id="txtAltura" name="altura" />
    </div>
    <button type="submit">Enviar</button>
</form>

<?php if(isset($_GET['comprimento']) && isset($_GET['largura']) && isset($_GET['altura'])): ?>
    <section class="my-1">
<?php $comprimento = $_GET['comprimento'];
    $largura = $_GET['largura'];
    $altura = $_GET['altura'];
    if(is_numeric($comprimento) && is_numeric($largura) && is_numeric($altura)):
?>
    <p><strong>Comprimento:</strong> <?= $comprimento ?></p>
    <p><strong>Largura:</strong> <?= $largura ?></p>
    <p><strong>Altura:</strong> <?= $altura ?></p>
    <p><strong>Volume:</strong> <?= $comprimento * $largura * $altura ?></p>
    <?php else:
        echo '<p>Algum dos valores informado não é um número válido!</p>';
    endif
?>
</section>
<?php endif; ?>
<?php include_once "../parts/footer.php";
