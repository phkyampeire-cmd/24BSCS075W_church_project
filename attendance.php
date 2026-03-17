<?php include("config.php"); ?>

<h2>Attendance</h2>

<form method="POST">
    <input type="text" name="member_name" placeholder="Member Name"><br><br>

    <select name="status">
        <option>Present</option>
        <option>Absent</option>
    </select><br><br>

    <input type="date" name="date"><br><br>

    <button name="save">Save</button>
</form>

<?php
if(isset($_POST['save'])){
    $name = $_POST['member_name'];
    $status = $_POST['status'];
    $date = $_POST['date'];

    mysqli_query($conn,"INSERT INTO attendance (member_name,status,date)
                        VALUES('$name','$status','$date')");
    echo "Recorded!";
}
?>