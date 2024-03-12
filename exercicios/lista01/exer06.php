<?php include_once "../../parts/header.php"; ?>

<h1>Lista 01</h1>
<h2>Exercício 06</h2>
<br>
<section>
    <p>Faça um script que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário</p>
</section>
<br><br>

<form method="get">
    <label for="txtLado">Informe o comprimento da lateral do quadrado</label>
    <input type="number" id="txtLado" name="lado" />
    <br>
    <button type="submit">Enviar</button>
</form>
<?php if(!empty($_GET['lado'])):
        $lado = $_GET['lado'];
        $area = $lado * $lado;
    ?>
        <br>
    <section>
        <p><strong>Valor informado:</strong> <?= $lado; ?></p>
        <p><strong>Valor da área:</strong> <?= $area; ?></p>
        <p><strong>Valor da área x 2:</strong> <?= $area * 2 ?></p>
    </section>
<?php endif; ?>

<?php include_once "../../parts/footer.php"; ?>
