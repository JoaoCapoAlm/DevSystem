<?php include_once "../../parts/header.php";
$tipoSelecionado = empty($_GET['tipo']) ? 'c' : $_GET['tipo'];
?>

<section class="my-1">
    <div class="my-1">
        <h1>Lista 01</h1>
        <h2>Exercício 08</h2>
    </div>
    <p>Faça um script que peça a temperatura em Fahrenheit e mostre a temperatura em graus Celsius</p>
    <p>C = (5 * (F-32)/9)</p>
</section>

<form method="get">
    <div class="my-1">
        <label for="txtTemperatura">Temperatura:</label>
        <input type="text" id="txtTemperatura" name="temperatura" required />
    </div>
    <div class="my-1">
        <input type="radio" id="rdCelsius" name="tipo" value="c" <?= $tipoSelecionado == 'c' ? 'checked' : '' ?> />
        <label for="rdCelsius">Celsius</label>
        <br>
        <input type="radio" id="rdFahrenheit" name="tipo" value="f" <?= $tipoSelecionado == 'f' ? 'checked' : '' ?> />
        <label for="rdFahrenheit">Fahrenheit</label>
    </div>
    <button type="submit">Enviar</button>
</form>

<?php if(!empty($_GET['temperatura']) && !empty($_GET['tipo'])):
$convertido = NAN;
if(!is_numeric($_GET['temperatura'])):
    echo '<p>Valor informado não é um número</p>';
else:
    if($_GET['tipo'] === 'c'){
        $convertido = 5 * ($_GET['temperatura'] - 32)/9;
    } else {
        $convertido = 32  + ($_GET['temperatura'] * 9 / 5);
    }
?>
    <section class="my-1">
        <p>Temperatura informada: <?= $_GET['temperatura'] ?></p>
        <p>Temperatura convertida: <?= $convertido ?> </p>
    </section>
<?php endif;
endif;
include_once "../../parts/footer.php"; ?>
