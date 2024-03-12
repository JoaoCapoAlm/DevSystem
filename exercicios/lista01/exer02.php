<?php include_once "../../parts/header.php"; ?>

<h1>Lista 02</h1>
<h2>Exercício 01</h2>
<br>
<section>
    <p>Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo.</p>
    <p>Obs.: procure por M_PI</p>
</section>
<br><br>

<form method="get">
    <label for="txtRaio">Digite o raio</label>
    <input type="number" id="txtRaio" name="raio" />

    <button type="submit">Enviar</button>
</form>

<?php if(!empty($_GET['raio'])): ?>
    <p><strong>Perímetro:</strong> <?= 2 * M_PI * $_GET['raio'] ?> </p>
    <p><strong>Área do círculo:</strong> <?= M_PI * ($_GET['raio'] * $_GET['raio'])  ?></p>
<?php endif; ?>

<?php include_once "../../parts/footer.php"; ?>
