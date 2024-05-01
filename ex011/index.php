<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            $salario = $_POST['sal'] ?? 0;
        ?>

        <h1>Informe seu salario</h1>

        <form action="<?=$SERVER['PHP_SELF'] ?>" method="post">
            <label for="sal">Seu salario (R$):</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>">
        </form>

        <section>
            <h2>Resultado final</h2>
            <?php
                $valor = intdiv($salario, 1412);
                $resto = $salario % 1412;

                printf("Quem recebe um salario de R$ %.2f ganha %.0f salarios minimos + R$ %.2f", $salario, $valor, $resto);                
                ?>            
        </section>
    </main>
</body>
</html>