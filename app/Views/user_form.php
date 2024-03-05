<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>
    <h1>User Form</h1>
    <?php if (isset($validation)): ?>
        <?= $validation->listErrors() ?>
    <?php endif; ?>
    <form action="/user/create" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?= set_value('name') ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= set_value('email') ?>" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
