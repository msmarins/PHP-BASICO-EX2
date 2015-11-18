<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function Fib($n) {
            $fator = [1, 1];
            for ($i = 2; $i <= $n; $i++) {
                $fator[$i] = $fator[$i - 1] + $fator[$i - 2];
            }
            return $fator;
        }

        $fib = implode(",", Fib(100));
        echo $fib;
        ?>
    </body>
</html>
