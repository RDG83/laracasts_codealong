<?php require "partials/header.php"; ?>

<h1>Index Page</h1>

<form action="/names" method="POST">

    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>


<!-- <ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else : ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach ?>
</ul> -->

<?php require "partials/footer.php"; ?>