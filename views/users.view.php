<?php require "partials/header.php"; ?>

<h1>All users</h1>

<?php foreach ($users as $user) : ?>
    <li>
        <?= $user->name; ?>
    </li>
<?php endforeach ?>

<form action="/users" method="POST">

    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php require "partials/footer.php"; ?>