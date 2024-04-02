<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 23</h2>
    </div>
    <p>Escreva um algoritmo que receba dois valores, calcule e apresente a área de um trapézio.</p>
</section>
<hr><br>
<form method="get">
    <div class="my-1">
        <label for="txtBaseMenor">Base menor:</label>
        <input type="text" id="txtBaseMenor" name="menor" />
    </div>
    <div class="my-1">
        <label for="txtBaseMaior">Base maior:</label>
        <input type="text" id="txtBaseMaior" name="maior" />
    </div>
    <div class="my-1">
        <label for="txtAltura">Altura:</label>
        <input type="text" id="txtAltura" name="altura" />
    </div>
    <button type="submit">Enviar</button>
</form>

<?php if(isset($_GET['menor']) && isset($_GET['maior']) && isset($_GET['altura'])): ?>
    <section class="my-1">
<?php $menor = $_GET['menor'];
    $maior = $_GET['maior'];
    $altura = $_GET['altura'];
    if(is_numeric($menor) && is_numeric($maior) && is_numeric($altura)):
?>
    <p><strong>Base menor:</strong> <?= $menor ?></p>
    <p><strong>Base maior:</strong> <?= $maior ?></p>
    <p><strong>Altura:</strong> <?= $altura ?></p>
    <p><strong>Área:</strong> <?= (($menor + $maior) * $altura) / 2 ?></p>
    <?php else:
        echo '<p>Algum dos valores informado não é um número válido!</p>';
    endif
?>
</section>
<?php endif; ?>
<?php include_once "../parts/footer.php";
