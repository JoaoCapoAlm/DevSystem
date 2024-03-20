<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 15</h2>
    </div>
    <p>Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.</p>
</section>
<hr><br>
<form method="get">
    <div class="my-1">
        <label for="txtValor">Valor:</label>
        <input type="text" id="txtValor" name="valor" />
    </div>

    <button type="submit">Enviar</button>
</form>

<section class="my-1">
    <?php if(isset($_GET['valor'])): ?>
        <?php if(is_numeric($_GET['valor'])){ ?>
            <p>Valor inicial: <?= $_GET['valor'] ?></p>
            <p>5%: <?= $_GET['valor'] * 0.05 ?>%</p>
            <p>50%: <?= $_GET['valor'] * 0.50 ?>%</p>
        <?php } else {
            echo '<p>Valor informado não é um número!</p>';
        }
    endif; ?>
</section>
<?php include_once "../parts/footer.php";
