<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>LIVING FAITH MINISTRIES</title>
</head>
<body>

<h2>Login</h2>

<form method="POST" action="login_process.php">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button><br><br><br>
    <p>Don't have an account? <a href="register.php">Register Admin</a></p>
    <div class="text-center mt-3">
    <a href="member_login.php" class="btn btn-outline-primary me-2">Member Login</a>
    <a href="member_register.php" class="btn btn-outline-success">Register</a>
</div>
</form>
<link rel="stylesheet" href="style.css">


</body>
</html>
<div class="container mt-5">