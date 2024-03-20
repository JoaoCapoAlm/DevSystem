<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 16</h2>
    </div>
    <p>Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados e mostre o resultado.</p>
</section>
<hr><br>
<form method="get">
    <div class="my-1">
        <label for="txtA">A:</label>
        <input type="text" id="txtA" name="a" />
    </div>
    <div class="my-1">
        <label for="txtB">B:</label>
        <input type="text" id="txtB" name="b" />
    </div>
    <button type="submit">Enviar</button>
</form>

<section class="my-1">
    <?php if(isset($_GET['a']) && isset($_GET['b'])): ?>
        <?php if(is_numeric($_GET['a']) && is_numeric($_GET['b'])){ ?>
            <p>A = <?= $_GET['a'] ?></p>
            <p>B = <?= $_GET['b'] ?></p>
            <p>A^2 + B^2 = <?=  pow($_GET['a'], 2) + pow($_GET['b'], 2)  ?></p>
        <?php } else {
            echo '<p>Valor informado não é um número!</p>';
        }
    endif; ?>
</section>
<?php include_once "../parts/footer.php";
