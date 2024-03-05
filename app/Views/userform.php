<!DOCTYPE html>
<html>
<head>
    <title>My CRUD Application</title>
</head>
<body>
    <h1>My</h1>

    <h2>Create Record</h2>
    <form method="post" action="<?php echo base_url('users/save'); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Create</button>
    </form>

    
    <script>
        function deleteRecord(id) {
            if (confirm('Are you sure you want to delete this record?')) {
                window.location.href = '<?php echo base_url('delete'); ?>/' + id;
            }
        }
    </script>
</body>
</html>
