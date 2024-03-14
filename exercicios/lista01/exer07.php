<?php include_once "../../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 07</h2>
    </div>
    <p>Faça um script que pergunte quando você ganha por hora e o número de horas trabalhadas no mês.</p>
    <p>Calcule e mostre o total de seu salário no referido mês.</p>
</section>

<form method="post">
    <div class="my-1">
        <label for="txtValorHora">Valor/Hora:</label>
        <input type="text" id="txtValorHora" name="valorHora" required/>
    </div>
    <div class="my-1">
        <label for="txtHorasTrabalhadas">Horas trabalhadas:</label>
        <input type="number" id="txtHorasTrabalhadas" name="horasTrabalhadas" required/>
    </div>
    <button type="submit">Enviar</button>
</form>
<?php if (!empty($_POST['valorHora']) && !empty($_POST['horasTrabalhadas'])):
    $valorHora = $_POST['valorHora'];
    $horasTrabalhadas = $_POST['horasTrabalhadas'];
    if (is_numeric($valorHora) && is_numeric($horasTrabalhadas)) {
        $salario = number_format($valorHora * $horasTrabalhadas, 2);
        echo '<p><strong>Salário mensal:</strong> ' . $salario . '</p>';
    } else {
        echo '<p>Atenção valor informado incorreto!</p>';
    }
endif;
include_once "../../parts/footer.php"; ?>
