<?php include_once '../parts/header.php' ?>

    <h1>Olá Mundo</h1>
    
    <form method="post">
        <label for="txtNome">Nome</label>
        <input type="text" id="txtNome" />
        <br>
        <label for="dtNascimento">Data de Nascimento</label>
        <input type="date" id="dtNascimento" max="today" />
    </form>

<?php include_once '../parts/footer.php' ?>