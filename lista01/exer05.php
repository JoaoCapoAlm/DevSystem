<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 05</h2>
    </div>
    <p>Faça um script que converta metros para centímetros</p>
</section>
<hr><br>

<form method="get">
    <label for="txtMetros">Digite a distância em metros</label>
    <input type="number" id="txtMetros" name="metros"/>
    <br>
    <button type="submit">Enviar</button>
</form>
<?php if (!empty($_GET['metros'])): ?>
    <br>
    <section>
        <p><strong>Valor informado:</strong> <?= $_GET['metros']; ?> m</p>
        <p><strong>Valor convertido:</strong> <?= $_GET['metros'] * 100; ?> cm</p>
    </section>
<?php endif; ?>

<?php include_once "../parts/footer.php"; ?>
