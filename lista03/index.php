<?php include_once "../parts/header.php";

$exercicios = [
    1 => '',
    2 => '',
    3 => '',
    4 => '',
    5 => '',
    6 => '',
    7 => ''
]
?>

<h1>Lista 03</h1>

<section class="my-1">
    <ul id="listExercicio">
        <?php foreach ($exercicios as $numero => $nome): ?>
            <li>
                <a href="./exer<?= sprintf("%02d", $numero) ?>">
                    <?= sprintf("%02d", $numero) . ' - ' . $nome ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php include_once "../parts/footer.php"; ?>
