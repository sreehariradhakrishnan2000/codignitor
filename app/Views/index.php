<form method="post" >

<table>

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['name']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['image']; ?></td>

            <td>
                <a href="<?= site_url('users/edit/' . $user['id']); ?>">Edit</a>
                <a href="<?= site_url('users/delete/' . $user['id']); ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="<?= site_url('users/create'); ?>">Add User</a>

<?= $pager->links() ?>


</form>
