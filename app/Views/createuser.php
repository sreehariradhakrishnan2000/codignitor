
<h2>Create User</h2>
<form method="post" action="<?= '/user/store' ?>">
    <label>ID:</label>
    <input type="text" name="id" required><br>
    <label>Name:</label>
    <input type="text" name="name" required><br>
    <button type="submit">Save</button>
</form>
