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
            $num = $_POST['num'] ?? 0;
        ?>

        <h1>Informe um numero</h1>

        <form action="<?=$SERVER['PHP_SELF'] ?>" method="post">
            <label for="num">Numero</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
        </form>

        <section>
            <h2>Resultado final</h2>
            <?php
                $raizQuadrada = $num ** (1/2);
                $raizCubica = $num ** (1/3);

                echo "Analisando o numero $num, temos:";
                printf("<li>A sua raiz quadrada eh %.0f</li>", $raizQuadrada);
                printf("<li>A sua raiz cubica eh %.0f</li>", $raizCubica);            
            ?>
        </section>
    </main>
</body>
</html>