<?php include_once "../../parts/header.php"; ?>

<h1>Lista 01</h1>
<h2>Exercício 04</h2>
<br>
<section>
    <p>Faça um script que peça 3 notas de um aluno e mostre sua nota</p>
</section>
<br><br>

<form method="get">
    <label for="txtNotaUm">Digite a primeira nota</label>
    <input type="number" id="txtNotaUm" name="um"/>
    <br>
    <label for="txtNotaDois">Digite a segundo nota</label>
    <input type="number" id="txtNotaDois" name="dois"/>
    <br>
    <label for="txtNotaTres">Digite a terceira nota</label>
    <input type="number" id="txtNotaTres" name="tres"/>
    <br>
    <button type="submit">Enviar</button>
</form>
<?php if (!empty($_GET['um']) && !empty($_GET['dois']) && !empty($_GET['tres'])): ?>
    <br>
    <section>
        <p><strong>Nota 1:</strong> <?= $_GET['um']; ?></p>
        <p><strong>Nota 2:</strong> <?= $_GET['dois']; ?></p>
        <p><strong>Nota 3:</strong> <?= $_GET['tres']; ?></p>
        <?php
        $media = ($_GET['um'] + $_GET['dois'] + $_GET['tres']) / 3;
        echo '<p><strong>Média:</strong> ' . $media . '</p>';
        ?>
    </section>
<?php endif; ?>

<?php include_once "../../parts/footer.php"; ?>
