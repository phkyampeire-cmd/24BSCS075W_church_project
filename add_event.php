<?php include("config.php"); ?>

<h2>Add Event</h2>

<form method="POST">
    <input type="text" name="title" placeholder="Event Title"><br><br>
    <input type="date" name="event_date"><br><br>
    <textarea name="description" placeholder="Description"></textarea><br><br>
    <button name="save">Save Event</button>
</form>

<?php
if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $date = $_POST['event_date'];
    $desc = $_POST['description'];

    mysqli_query($conn, "INSERT INTO events (title,event_date,description)
                         VALUES ('$title','$date','$desc')");

    echo "Event added!";
}
?>