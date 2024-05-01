<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor1 = $_POST['v1'] ?? 0;
        $valor2 = $_POST['v2'] ?? 1;
    ?>

    <main>
        <h1>Anatomia de uma divisao</h1>

        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="idv1" min="0" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="idv2" min="1" value="<?=$valor2?>">

            <input type="submit" value="Dividir">
        </form>        
    </main>

     <section>
        <h2>Estrutura da divisao</h2>

        <?php
            $quociente = intdiv($valor1, $valor2);
            $resto = $valor1 % $valor2;

            echo "<ul>";
            echo "<li>Dividendo: $valor1</li>";
            echo "<li>Divisor: $valor2</li>";
            echo "<li>Quociente: $quociente</li>";
            echo "<li>Resto: $resto</li>";
            echo "</ul>";
        ?>
        
        <table class="divisao">
            <tr>
                <td><?=$valor1?></td>
                <td><?=$valor2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
     </section>
</body>
</html>