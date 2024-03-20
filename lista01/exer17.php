<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 17</h2>
    </div>
    <p>Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e exiba para o
        usuário a velocidade em km/h.</p>
</section>
<hr><br>
<form method="get">
    <div class="my-1">
        <label for="txtVelocidade">Velocidade (m/s):</label>
        <input type="text" id="txtVelocidade" name="velocidade" />
    </div>
    <button type="submit">Enviar</button>
</form>

<section class="my-1">
    <?php if(isset($_GET['velocidade'])):
        $vel = $_GET['velocidade'];
        if(is_numeric($vel)){ ?>
            <p>Velocidade inicial: <?= $vel ?> m/s</p>
            <p>Velocidade convertida: <?= $vel * 3.6 ?> km/h</p>
        <?php } else {
            echo '<p>Valor informado não é um número válido!</p>';
        }
    endif; ?>
</section>
<?php include_once "../parts/footer.php";
