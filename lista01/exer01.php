<?php include_once "../parts/header.php"; ?>

<h1>Lista 01</h1>
<h2>Exercício 01</h2>
<br>
<section>
    <p>Faça um script que que peça um número e então mostre a mensagem:</p>
    <i>
        <blockquote>"O número informado foi [número]"</blockquote>
    </i>
</section>
<hr>
<br>

<h3>Resolução</h3>
<form method="get">
    <label for="txtNumero">Digite um número</label>
    <input type="number" id="txtNumero" name="num"/>

    <button type="submit">Enviar</button>
</form>

<?php if (isset($_GET['num'])): ?>
    <p>O número informado foi <strong><?= $_GET['num'] ?></strong></p>
<?php endif; ?>

<?php include_once "../parts/footer.php"; ?>
