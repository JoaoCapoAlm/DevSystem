<?php include_once "../../parts/header.php"; ?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 10</h2>
    </div>
    <p>Faça um script que peça dois números inteiros e um número real. Calcule e mostre:</p>
    <ol type="a">
        <li>O produto do dobro do primeiro com metade do segundo.</li>
        <li>A soma do triplo do primeiro com o terceiro.</li>
        <li>O terceiro elevado ao cubo.</li>
    </ol>
</section>

<form method="get">
    <div class="my-1">
        <label for="txtPrimeiro">Primeiro valor:</label>
        <input type="text" id="txtPrimeiro" name="primeiro" required/>
    </div>
    <div class="my-1">
        <label for="txtSegundo">Segundo valor:</label>
        <input type="text" id="txtSegundo" name="segundo" required/>
    </div>
    <div class="my-1">
        <label for="txtTerceiro">Terceiro valor:</label>
        <input type="text" id="txtTerceiro" name="terceiro" required/>
    </div>
    <button type="submit">Enviar</button>
</form>
<section class="my-1">
    <p><strong>Resposta</strong></p>
    <?php
    if (!empty($_GET['primeiro']) && !empty($_GET['segundo']) && !empty($_GET['terceiro'])):
        if (!is_numeric($_GET['primeiro'])):
            echo '<p>Primeiro valor informado inválido!</p>';
        elseif (!is_numeric($_GET['segundo'])):
            echo '<p>Segundo valor informado inválido!</p>';
        elseif (!is_numeric($_GET['terceiro'])):
            echo '<p>Terceiro valor informado inválido!</p';
        else:
            ?>
            <p><strong>Item a:</strong> <?= (($_GET['primeiro'] ** 2) + ($_GET['segundo'] / 2)) ?> </p>
            <p><strong>Item b:</strong> <?= (($_GET['primeiro'] * 3) + $_GET['terceiro']); ?></p>
            <p><strong>Item c:</strong> <?= ($_GET['terceiro'] ** 3); ?></p>
        <?php
        endif;
    endif;
    ?>
</section>
<?php include_once "../../parts/footer.php"; ?>
