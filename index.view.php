<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Index Page</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->isCompleted()) : ?>
                    <strike>
                        <?= $task->getDescription(); ?>
                    </strike>
                <?php else : ?>
                    <?= $task->getDescription(); ?>
                <?php endif; ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>