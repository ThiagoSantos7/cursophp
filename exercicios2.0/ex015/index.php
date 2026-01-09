<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula For exercício</title>
</head>

<body>
    <div>
        <h1>Calculadora de números primos</h1>
        <form action="cod.php" method="get">
            <label for="num">Número:</label>
            <select name="num">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option>$i</option>";
                }
                ?>
            </select>
            <input type="submit" value="Calcular">

        </form>
    </div>
</body>

</html>