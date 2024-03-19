<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 14</h2>
    </div>
    <p>Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor.</p>
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
    <h3><strong>Resposta</strong></h3>
    <?php if(isset($_GET['valor'])): ?>
        <?php if(is_numeric($_GET['valor'])){ ?>
            <p>Valor inicial: <?= $_GET['valor'] ?></p>
            <p>Porcentagem: <?= $_GET['valor'] * 0.15 ?>%</p>
        <?php } else {
            echo '<p>Valor informado não é um número!</p>';
        }
    endif; ?>
</section>
<?php include_once "../parts/footer.php";
