<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php
            $nome = $_REQUEST["nome"] ?? "Sem Nome";
            $sobrenome = $_REQUEST["sobrenome"] ?? "Desconhecido";

            echo "<p>Prazer te conhecer, $nome $sobrenome!</p>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para a pagina anterior</a>
        </p>
    </main>
    
</body>
</html>