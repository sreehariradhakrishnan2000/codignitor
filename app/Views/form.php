<html>
<head>
    <title>My Form</title>
</head>
<body>
    <?php echo form_open('form/submit'); ?>

        <label for="name">Name:</label>
        <input type="text" name="name" />

        <label for="email">Email:</label>
        <input type="email" name="email" />

        <input type="submit" value="Submit" />

    <?php echo form_close(); ?>
</body>
</html>
