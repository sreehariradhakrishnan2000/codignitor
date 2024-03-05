<h2>Edit User</h2>
<form action="<?= site_url('users/update'); ?>" method="post">
    <input type="hidden" name="id" value="<?= $user['id']; ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?= $user['name']; ?>" required>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= $user['email']; ?>" required>
    <input type="submit" value="Update">
</form>
