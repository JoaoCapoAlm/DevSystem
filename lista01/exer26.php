<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 26</h2>
    </div>
    <p>Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel e a quantidade de combustível (em litros) consumida para percorrê-la, calcule e imprima o consumo médio de combustível. Fórmula: Consumo médio = Km / litros</p>
</section>
<hr><br>
<form method="get">
    <div class="my-1">
        <label for="txtDistancia">Distáncia total:</label>
        <input type="text" id="txtDistancia" name="distancia" />
    </div>
    <div class="my-1">
        <label for="txtCombustivel">Quantidade combustível:</label>
        <input type="text" id="txtCombustivel" name="combustivel" />
    </div>
    <button type="submit">Enviar</button>
</form>

<?php if(isset($_GET['distancia']) && isset($_GET['combustivel'])): ?>
    <section class="my-1">
<?php $distancia = $_GET['distancia'];
    $combustivel = $_GET['combustivel'];
    if(is_numeric($distancia) && is_numeric($combustivel)):

?>
    <p><strong>Distância percorrida:</strong> <?= number_format($distancia, 2) ?> Km</p>
    <p><strong>Combustível consumido:</strong> <?= number_format($combustivel, 2) ?> l</p>
    <p><strong>Consumo médio:</strong> R$ <?= number_format($distancia / $combustivel, 2) ?> Km/l</p>
    <?php else: ?>
        <p>Valor informado não é um número válido!</p>
    <?php endif ?>
</section>
<?php endif; ?>
<?php include_once "../parts/footer.php";
