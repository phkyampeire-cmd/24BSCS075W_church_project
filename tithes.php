<?php include("config.php"); ?>

<h2>Tithes & Offerings</h2>

<form method="POST">
    <input type="text" name="member_name" placeholder="Member Name"><br><br>
    <input type="number" name="amount" placeholder="Amount"><br><br>
    <input type="date" name="date"><br><br>
    <button name="save">Save</button>
</form>

<?php
if(isset($_POST['save'])){
    $name = $_POST['member_name'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

    mysqli_query($conn,"INSERT INTO tithes (member_name,amount,date)
                        VALUES('$name','$amount','$date')");
    echo "Saved!";
}
?>