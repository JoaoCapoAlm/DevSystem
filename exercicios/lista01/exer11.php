<?php include_once "../../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 11</h2>
    </div>
    <p>Tendo como dados de entrada a altura de uma pessoa, construa um script que calcule o seu peso ideal,
        usando a seguinte fórmula:</p>
    <ol type="a">
        <li>Para homens: (72.7 * altura) - 58</li>
        <li>Para mulheres: (62.1 * altura) - 44.7</li>
    </ol>
</section>
<hr>
<form method="get">
    <div class="my-1">
        <input type="radio" id="txtMasculino" name="sexo" value="m" checked />
        <label for="txtMasculino">Masculino</label>
        <br>
        <input type="radio" id="txtFeminino" name="sexo" value="f" />
        <label for="txtFeminino">Feminino</label>
    </div>
    <div class="my-1">

    </div>
    <div class="my-1">
        <label for="txtAltura">Digite sua altura:</label>
        <input type="text" id="txtAltura" name="altura" required/>
    </div>
    <button type="submit">Enviar</button>
</form>
<section class="my-1">
    <p><strong>Resposta</strong></p>
    <?php if(!empty($_GET['altura']) && !empty($_GET['sexo'])): ?>
        <?php if(is_numeric($_GET['altura'])){
            $sexo = mb_strtolower($_GET['sexo']);
            $altura = $_GET['altura'];
            if($sexo === 'm'){
                echo '<p>Alutra: '.$altura.'</p>';
                echo '<p>Homem</p>';
                echo '<p>Peso ideal: '. (72.7 * $altura) - 58 . 'kg</p>';
            }
            elseif ($sexo === 'f') {
                echo '<p>Alutra: '.$altura.'</p>';
                echo '<p>Mulher</p>';
                echo '<p>Peso ideal: '.(62.1 * $altura) - 44.7.'kg</p>';
            } else {
                echo '<p>Sexo informado inválido!</p>';
            }
        } else {
            echo '<p>Altura informada não é um número!</p>';
        }
    endif; ?>
</section>
<?php include_once "../../parts/footer.php"; ?>
