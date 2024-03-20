<?php include_once "../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 18</h2>
    </div>
    <p>Escreva um algoritmo que leia a altura e o peso de uma pessoa, calcule o seu IMC (Índice de Massa Corporal) e
        exiba para o usuário.
    </p>
</section>
<hr><br>
<form method="get">
    <div class="my-1">
        <label for="txtAltura">Altura (m):</label>
        <input type="text" id="txtAltura" name="altura" />
    </div>
    <div class="my-1">
        <label for="txtPeso">Peso (kg):</label>
        <input type="text" id="txtPeso" name="peso" />
    </div>
    <button type="submit">Enviar</button>
</form>

<section class="my-1">
    <?php if(isset($_GET['altura']) && isset($_GET['peso'])):
        $altura = $_GET['altura'];
        $peso = $_GET['peso'];
        if(is_numeric($altura) && is_numeric($_GET['peso'])){
            $imc = $peso / (pow($altura, 2));
            $classificacao = 'Magreza';
            if($imc >= 18.5 && $imc < 25)
                $classificacao = 'Normal';
            elseif ($imc >= 25 && $imc < 30)
                $classificacao = 'Sobrepeso';
            elseif ($imc >= 30 && $imc < 40)
                $classificacao = 'Obsidade';
            elseif ($imc >= 40)
                $classificacao = 'Obsidade grave';
        ?>
            <p>Altura: <?= $altura ?> m</p>
            <p>Peso: <?= $peso ?> kg</p>
            <p>IMC: <?= number_format($imc, 2) ?></p>
            <p>Classificação: <?= $classificacao ?></p>
        <?php } else {
            echo '<p>Valor informado não é um número válido!</p>';
        }
    endif; ?>
</section>
<?php include_once "../parts/footer.php";
