<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>
</head>
<body>

<h2>Add Church Member</h2>

<form method="POST">
    <input type="text" name="fullname" placeholder="Full Name" required><br><br>

    <select name="gender">
        <option>Male</option>
        <option>Female</option>
    </select><br><br>

    <input type="text" name="phone" placeholder="Phone"><br><br>

    <input type="text" name="address" placeholder="Address"><br><br>

    <input type="date" name="join_date"><br><br>

    <button type="submit" name="save">Save Member</button>
</form>

</body>
</html>

<?php
if (isset($_POST['save'])) {
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $join_date = $_POST['join_date'];

    $sql = "INSERT INTO members (fullname, gender, phone, address, join_date)
            VALUES ('$fullname','$gender','$phone','$address','$join_date')";

    mysqli_query($conn, $sql);

    echo "Member added successfully!";
}
?>