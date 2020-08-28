<?php require "partials/header.php"; ?>

<h1>Index Page</h1>

<?php require "partials/nav.php"; ?>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else : ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach ?>
</ul>

<?php require "partials/footer.php"; ?>