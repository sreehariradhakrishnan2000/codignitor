<h2>Create User</h2>

<?php if (session()->get('validation')) : ?>
    <div class="alert alert-danger">
        <?= session()->get('validation')->listErrors(); ?>
    </div>
<?php endif; ?>

<form action="<?= site_url('users/store'); ?>" method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?= old('name'); ?>" required>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= old('email'); ?>" required>
    <input type="file" name="image" required />
    <input type="submit" name="submit" value="Upload" />
</form>
