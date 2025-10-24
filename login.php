<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'header.inc'; ?>
    <form method="post" action="process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="text" name="password" required><br>

        <input type="hidden" name="token" value="104221122">
        <button type="submit">Login</button>
    </form>
    <?php include 'footer.inc'; ?>
</body>
</html>