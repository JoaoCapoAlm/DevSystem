<?php include_once "../../parts/header.php";

$exercicios = [
    1 => 'GET número',
    2 => 'Área e perímetro do círculo',
    3 => 'Soma',
    4 => 'Média de nota',
    5 => 'Conversão metros para  centímetros',
    6 => 'Dobro da área do quadrado',
    7 => ''
]
?>

<h1>Lista 01</h1>

<section class="my-1">
    <ul id="listExercicio">
        <?php foreach($exercicios as $numero => $nome): ?>
        <li>
            <a href="./exer<?= sprintf("%02d", $numero) ?>">
                <?= sprintf("%02d", $numero).' - '.$nome ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php include_once "../../parts/footer.php"; ?>
