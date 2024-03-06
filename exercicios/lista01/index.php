<?php include_once "../../parts/header.php"; ?>

<h1>Lista 01</h1>

<ul id="listExercicio">
    <?php for($i = 1; $i <= 26; $i++): ?>
    <li><a href="./exer<?= sprintf("%02d", $i) ?>.php">Exercício <?= sprintf("%02d", $i) ?></a></li>
    <?php endfor; ?>
</ul>

<?php include_once "../../parts/footer.php"; ?>
