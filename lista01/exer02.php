<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 02</h2>
    </div>
    <p>Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo.</p>
    <p>Obs.: procure por M_PI</p>
</section>
<hr />
<br />

<h3>Resolução</h3>

<form method="get">
    <label for="txtRaio">Digite o raio</label>
    <input type="number" id="txtRaio" name="raio"/>

    <button type="submit">Enviar</button>
</form>

<?php if (!empty($_GET['raio']) && is_numeric($_GET['raio'])): ?>
    <p><strong>Raio informado:</strong> <?= $_GET['raio'] ?></p>
    <p><strong>Perímetro:</strong> <?= 2 * M_PI * $_GET['raio'] ?> </p>
    <p><strong>Área do círculo:</strong> <?= M_PI * ($_GET['raio'] * $_GET['raio']) ?></p>
<?php endif; ?>

<?php include_once "../parts/footer.php"; ?>
