<?php include("config.php"); ?>

<h2>Church Members</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Phone</th>
    <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM members");

while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['fullname']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td>
        <a href="delete_member.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>