<?php include_once "../../parts/header.php"; ?>

<h1>Lista 01</h1>
<h2>Exercício 03</h2>
<br>
<section>
    <p>Faça um script que peça dois números e imprima a soma</p>
</section>
<br><br>

<form method="get">
    <label for="txtNumeroUm">Digite o primeiro número</label>
    <input type="number" id="txtNumeroUm" name="numUm"/>
    <br>
    <label for="txtNumeroDois">Digite o segundo número</label>
    <input type="number" id="txtNumeroDois" name="numDois"/>
    <br>
    <button type="submit">Enviar</button>
</form>

<?php if (!empty($_GET['numUm']) && !empty($_GET['numDois'])): ?>
    <p><?= $_GET['numUm'] + $_GET['numDois'] ?></p>
<?php endif; ?>

<?php include_once "../../parts/footer.php"; ?>
