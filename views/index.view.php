<?php require "partials/header.php"; ?>

<h1>Index Page</h1>

<form action="/names" method="POST">

    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>


<?php foreach ($users as $user) : ?>
    <li>
        <?= $user->name; ?>
    </li>
<?php endforeach ?>

<?php require "partials/footer.php"; ?>