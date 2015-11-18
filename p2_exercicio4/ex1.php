<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function ParImpar($ar) {
            for ($i = 0; $i < count($ar); $i++) {
                if ($ar[$i] % 2 == 0):
                    $tipo = "Par";
                else:
                    $tipo = "ímpar";
                endif;
                echo "O número " . $ar[$i] . " é " . $tipo . "<br />";
            }
        }

        $ar = array(1, 2, 12, 15, 17, 7, 40, 55, 68, 73, 88, 96);
        ParImpar($ar)
        ?>
    </body>
</html>
