<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h3 class="text-center">Admin Registration</h3>

        <form method="POST">

            <input type="text" name="username" class="form-control mb-3" placeholder="Enter Username" required>

            <input type="password" name="password" class="form-control mb-3" placeholder="Enter Password" required>

            <input type="password" name="confirm_password" class="form-control mb-3" placeholder="Confirm Password" required>

            <button type="submit" name="register" class="btn btn-primary w-100">Register</button>

        </form>
    </div>
</div>

</body>
</html>

<?php
if(isset($_POST['register'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    // Check passwords match
    if($password != $confirm){
        echo "<script>alert('Passwords do not match');</script>";
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if user exists
    $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if(mysqli_num_rows($check) > 0){
        echo "<script>alert('Username already exists');</script>";
        exit();
    }

    // Insert admin
    mysqli_query($conn, "INSERT INTO users (username, password, role)
                         VALUES ('$username','$hashed_password','admin')");

    echo "<script>alert('Admin registered successfully'); window.location='login.php';</script>";
}
?>