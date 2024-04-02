<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 24</h2>
    </div>
    <p>Escreva um algoritmo que leia 3 notas de um aluno e calcule a média final deste aluno, considerando que a média é ponderada, ou seja, o peso das notas são, respectivamente, 2, 3 e 5.</p>
</section>
<hr><br>
<form method="get">
    <div class="my-1">
        <label for="txtNota1">Nota 01:</label>
        <input type="text" id="txtNota1" name="nota1" />
    </div>
    <div class="my-1">
        <label for="txtNota2">Nota 02:</label>
        <input type="text" id="txtNota2" name="nota2" />
    </div>
    <div class="my-1">
        <label for="txtNota3">Nota 03:</label>
        <input type="text" id="txtNota3" name="nota3" />
    </div>
    <button type="submit">Enviar</button>
</form>

<?php if(isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3'])): ?>
    <section class="my-1">
<?php $nota01 = $_GET['nota1'];
    $nota02 = $_GET['nota2'];
    $nota03 = $_GET['nota3'];
    if(is_numeric($nota01) && is_numeric($nota02) && is_numeric($nota03)):
?>
    <p><strong>Média ponderada:</strong> <?= (($nota01 * 2) + ($nota02 * 3) + ($nota03 * 5)) / 10 ?></p>
    <?php else: ?>
        <p>Algum dos valores informado não é um número válido!</p>
    <?php endif ?>
</section>
<?php endif; ?>
<?php include_once "../parts/footer.php";
