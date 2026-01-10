<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For em PHP</title>
</head>

<body>
    <div>
        <form action="cod.php" method="get">
            <label for="num">Escolha um número</label>
            <select name="num" id="idnum">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option>$i</option> <br>";
                }
                ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </div>
</body>

</html>