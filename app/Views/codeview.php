<!DOCTYPE html>
<html>
<head>
    <title>My CRUD Application</title>
</head>
<body>
    <h1>My CRUD Application</h1>
<?php
if(session()->has('success')){


?><p><?= session()->getFlashdata('success')?>
</p>
<?php
}
?>
    <h2>Create Record</h2>
    <form method="post" action="<?php echo base_url('create'); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Create</button>
    </form>

    <h2>Read Records</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $record) { ?>
            <tr>
                <td><?php echo $record['id']; ?></td>
                <td><?php echo $record['name']; ?></td>
                <td>
                    <a href="<?php echo base_url('users/edit/' . $record['id']); ?>">Edit</a>
                    <a href="'<?php echo base_url('users/delete/'. $record['id']); ?>/' + id;" onclick="deleteRecord(<?php echo $record['id']; ?>)">Delete</a>
                </td>
            </tr>
            <?php
            } 
            ?>
        </tbody>
    </table>

    <script>
        function deleteRecord(id) {
            if (confirm('Are you sure you want to delete this record?')) {
                window.location.href = '<?php echo base_url('users/delete/'); ?>/' + id;
            }
        }
    </script>
</body>
</html>
