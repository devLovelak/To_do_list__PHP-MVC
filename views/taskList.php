<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Todo List</title>
</head>
<body>
    <header>
        <img src="" alt="">
        <h1>To-do List</h1>
    </header>
       
    <main>
        <div class="form">
            <form method="POST" action="index.php">
                <input type="text" name="task">
                <input type="submit" name="addTask" value="Adicionar Tarefa">
            </form>
        </div>
        

        <div class="result">
            <h3>Result:</h3>

            <div class="list-result">
                <ul>
                    <?php foreach ($tasks as $index => $task): ?>
                        <li>
                            <?php echo $task->getDescription(); ?>
                            <?php if (!$task->isDone()): ?>
                                <form method="POST" action="index.php" style="display: inline;">
                                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                                    <input type="submit" name="deleteTask" value="Apagar">
                                </form>
                                </form>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </main>

</body>
</html>