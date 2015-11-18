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
            "matricula" => array(
                "001",
                "002",
                "003",
                "004",
                "005",
                "006",
                "007",
                "008",
                "009",
                "010",
                "011",
                "012",
                "013",
                "014",
                "015",
                "016",
                "017",
                "018"),
            "altura" => array(
                1.77,
                1.68,
                1.83,
                1.55,
                1.91,
                1.74,
                1.56,
                1.89,
                1.60,
                1.93,
                1.57,
                1.89,
                1.85,
                1.55,
                1.80,
                1.70,
                1.80,
                1.87)
        );
        array_multisort($aluno["altura"], SORT_DESC, SORT_NUMERIC, $aluno["nome"], SORT_NUMERIC, $aluno["matricula"]);
        for ($i = 0; $i < 5; $i++) {
            echo "<b>Matrícula:</b> " . $aluno["matricula"][$i] . " Altura " . $aluno["altura"][$i] . "<br />";
        }
        ?>

    </body>
</html>
