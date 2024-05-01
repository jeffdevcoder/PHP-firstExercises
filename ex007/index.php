<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes Aritmeticas</title>
</head>
<body>

    <?php
        // tira o -
        $r = abs(-2000);
        echo "$r\n";

        // convertendo 254 da base 10 para base 8
        $t = base_convert(254, 10, 8);
        echo "$t\n";

        // intdiv = divisao inteira
        $d = intdiv(5, 2);
        print("$d\n");

        // maximo e minimo
        $max = max(1, 2, 3, 4, 5, 6, 7, 8);
        echo "$max\n";
        $min = min(1, 2, 3, 4, 5, 6, 7);
        echo "$min\n";

        // potenciacao
        $p = pow(5, 2);
        echo "$p\n";

        // raiz quadrado
        $raiz = sqrt(81);
        
    ?>
    

</body>
</html>