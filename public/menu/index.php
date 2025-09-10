<?php
include '../../config/db.php';

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <header>

    </header>

    <main class="centralizar flex">
<a href="../jogadores/read.php">
<button class="botoes_menu">
    <h1>Jogadores</h1>
</button>
</a>
<a href="../times/read.php">
<button class="botoes_menu">
    <h1>Times</h1>
</button>
</a>
<a href="../partidas/read.php">
    <button class="botoes_menu">
        <h1>Partidas</h1>
    </button>
</a>
    </main>

    <footer>
        <div class="centralizar">
            <a href="../login.php">
                <button id="botao_voltar" type="submit">Voltar</button>
            </a>
        </div>
    </footer>
</body>
</html>