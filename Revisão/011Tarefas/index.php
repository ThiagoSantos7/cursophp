<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de tarefas</title>
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION['tarefas'])) {
        $_SESSION["tarefas"] = array(
            array('nome' => 'Estudar', 'status' => 'pendente'),
            array('nome' => 'Levar cachorro para passear', 'status' => 'concluido'),
        );
    }

    $task = $_POST['task'] ?? null;
    ?>
    <main>
        <h1>Tarefas</h1>
        <section>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <label for="task">Digite uma tarefa</label>
                <input type="text" name="task" placeholder="Ex: Estudar...">
                <input type="submit" value="adicionar">
            </form>
        </section>
        <br>
        <section>

        </section>
    </main>

</body>

</html>