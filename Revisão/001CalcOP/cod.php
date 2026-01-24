<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <title>Resultado</title>
</head>

<body>
    <?php
    session_start();
    $n1 = isset($_POST["n1"]) ? $_POST["n1"] : 1;
    $n2 = isset($_POST["n2"]) ? $_POST["n2"] : 1;
    $op = isset($_POST["op"]) ? $_POST["op"] : 1;

    if (!isset($_SESSION["historico"])) {
        $_SESSION["historico"] = [];
    }

    ?>
    <main>
        <section>
            <form>
                <?php

                function numeros($n1, $n2)
                {
                    echo "<h2>Com base nos numeros escolhidos:</h2>";
                    echo "
                        <ul>
                            <li>Primeiro número: <strong>$n1</strong></li>
                            <li>Segundo número: <strong>$n2</strong></li>
                        </ul>";
                }

                switch ($op) {
                    case 1:
                        $result = $n1 + $n2;

                        $_SESSION["historico"][] = [
                            'operacao' => 'Adição',
                            'n1' => $n1,
                            'n2' => $n2,
                            'resultado' => $result
                        ];

                        numeros($n1, $n2);

                        echo "<h3>O resultado da adição é: <br></h3>";
                        echo "<h1>$result</h1>";
                        break;
                    case 2:
                        $result = $n1 - $n2;

                        $_SESSION["historico"][] = [
                            'operacao' => 'Subtração',
                            'n1' => $n1,
                            'n2' => $n2,
                            'resultado' => $result
                        ];

                        numeros($n1, $n2);
                        echo "<h3>O resultado da subtração é: <br></h3>";
                        echo "<h1>$result</h1>";
                        break;
                    case 3:
                        $result = $n1 * $n2;

                        $_SESSION["historico"][] = [
                            'operacao' => 'Multiplicação',
                            'n1' => $n1,
                            'n2' => $n2,
                            'resultado' => $result
                        ];

                        numeros($n1, $n2);

                        echo "<h3>O resultado da multiplicação é: <br></h3>";
                        echo "<h1>$result</h1>";
                        break;
                    case 4:
                        $result = $n1 / $n2;

                        $_SESSION["historico"][] = [
                            'operacao' => 'Divisão',
                            'n1' => $n1,
                            'n2' => $n2,
                            'resultado' => $result
                        ];

                        if ($n1 >= $n2) {
                            numeros($n1, $n2);

                            echo "<h3>O resultado da Divisão é: <br></h3>";
                            echo "<h1>" . number_format($result, 2, ".", ",") . "</h1>";
                        } else {
                            echo "<h3>Para que a divisão exiba o valor correto,<br> o primeiro número deve ser maior que o segundo!<h3>";
                        }
                        break;
                    case 5:
                        $soma = $n1 + $n2;
                        $resultRaiz = sqrt($soma);

                        $_SESSION["historico"][] = [
                            'operacao' => 'Raiz Quadrada',
                            'n1' => $n1,
                            'n2' => $n2,
                            'soma números' => $soma,
                            'resultado' => number_format($resultRaiz, 2, ".", ",")
                        ];

                        echo "<h2>Com base nos numeros escolhidos:</h2>";
                        echo "
                            <ul>
                                <li>Primeiro número: <strong>$n1</strong></li>
                                <li>Segundo número: <strong>$n2</strong></li>
                                <li>Os dois números somados: <strong>$soma</strong></li>
                            </ul>";
                        echo "<h3>O resultado da raiz quadrada dos números somados é: <br></h3>";
                        echo "<h1>" . number_format($resultRaiz, 2, ".", ",") . "</h1>";
                        break;
                    case 6:
                        $soma = $n1 + $n2;
                        $resultCub = pow($soma, 1 / 3);

                        $_SESSION["historico"][] = [
                            'operacao' => 'Raiz Cubica',
                            'n1' => $n1,
                            'n2' => $n2,
                            'soma números' => $soma,
                            'resultado' => number_format($resultCub, 2, ".", ",")
                        ];

                        echo "<h2>Com base nos numeros escolhidos:</h2>";
                        echo "
                            <ul>
                                <li>Primeiro número: <strong>$n1</strong></li>
                                <li>Segundo número: <strong>$n2</strong></li>
                                <li>Os dois números somados: <strong>$soma</strong></li>
                            </ul>";
                        echo "<h3>O resultado da raiz cubica dos números somados é: <br></h3>";
                        echo "<h1>" . number_format($resultCub, 2, ".", ",") . "</h1>";
                        break;
                    case 7:
                        if (!empty($_SESSION["historico"])) {
                            echo "<h2>Histórico de cálculos</h2>";
                            echo "<ul>";

                            foreach ($_SESSION["historico"] as $item) {
                                echo "<li>
                                    <strong>{$item['operacao']}</strong>
                                    -> Resultado: <strong>{$item['resultado']}</strong>
                                </li>
                            ";
                            }
                            echo "</ul>";
                        }
                        break;
                    default:
                        echo "Opção inválida, volte e tente novamente!";
                }
                ?>
            </form>
        </section>
        <a href='javascript:history.go(-1)' class="btn2">Voltar</a>
    </main>
</body>

</html>