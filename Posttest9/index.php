<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Library Login</title>
</head>
<body>
    <h1>Library Login</h1>
    <form action="home.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <br>
    <h2>Register</h2>
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
