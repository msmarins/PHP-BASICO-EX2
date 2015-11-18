<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nota_min = 6;
        $aluno = array("nome" => array(
                "Marcio",
                "André",
                "Maria",
                "Carla",
                "Jurema",
                "Matias",
                "julia",
                "Dora",
                "Angélica",
                "Eduarda",
                "Marcella",
                "Cosme",
                "Amélia",
                "Mercedes",
                "Aretusa",
                "Vinícius",
                "José",
                "Carlos"),
            "nota" => array(10, 8, 3, 5, 1, 4, 6, 9, 10, 3, 7, 9, 4.5, 5.5, 3.5, 7, 10, 0));
        for ($i = 0; $i < count($aluno["nome"]); $i++) {

            if ($aluno["nota"][$i] < $nota_min):
                $status = "reprovado(a)";
            else:
                $status = "aprovado(a)";
            endif;
            echo "<b>Aluno:</b> " . $aluno["nome"][$i] . " Tirou nota " . $aluno["nota"][$i] . " e está <b>" . $status . "</b><br />";
        }
        ?>
    </body>
</html>
