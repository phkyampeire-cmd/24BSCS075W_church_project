<?php include("config.php"); ?>

<h2>Church Events</h2>

<table border="1">
<tr>
    <th>Title</th>
    <th>Date</th>
    <th>Description</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM events");

while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['event_date']; ?></td>
    <td><?php echo $row['description']; ?></td>
</tr>
<?php } ?>
</table>