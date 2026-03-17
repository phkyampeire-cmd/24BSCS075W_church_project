<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header("Location: login.php");
}
?>

<h2>Admin Dashboard</h2>

<a href="add_member.php">Manage Members</a><br>
<a href="view_members.php">View Members</a><br><br>

<a href="add_event.php">Manage Events</a><br>
<a href="view_events.php">View Events</a><br><br>

<a href="tithes.php">Tithes & Offerings</a><br>
<a href="attendance.php">Attendance</a><br><br>

<a href="logout.php">Logout</a>