<?php
session_start();
include("config.php");

// Restrict access
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Get counts
$members = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM members"))['total'];
$events = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM events"))['total'];
$tithes = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(amount) as total FROM tithes"))['total'];
$attendance = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM attendance"))['total'];

$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Church Management System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .sidebar {
            height: 100vh;
            background: #343a40;
            color: white;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            margin: 10px 0;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #495057;
            padding-left: 10px;
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <h4>CMS</h4>
            <p><?php echo $_SESSION['username']; ?> (<?php echo $role; ?>)</p>

            <a href="dashboard.php">Dashboard</a>

            <?php if ($role == 'admin') { ?>
                <a href="add_member.php">Add Member</a>
                <a href="view_members.php">View Members</a>
                <a href="add_event.php">Add Event</a>
                <a href="view_events.php">View Events</a>
                <a href="tithes.php">Tithes</a>
                <a href="attendance.php">Attendance</a>
            <?php } ?>

            <?php if ($role == 'pastor') { ?>
                <a href="view_members.php">View Members</a>
                <a href="view_events.php">View Events</a>
                <a href="attendance.php">Attendance</a>
            <?php } ?>

            <a href="logout.php" class="text-danger">Logout</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">

            <h2 class="mb-4">Dashboard Overview</h2>

            <div class="row">

                <!-- Members -->
                <div class="col-md-3">
                    <div class="card bg-primary text-white p-3">
                        <h5>Total Members</h5>
                        <h2><?php echo $members; ?></h2>
                    </div>
                </div>

                <!-- Events -->
                <div class="col-md-3">
                    <div class="card bg-success text-white p-3">
                        <h5>Total Events</h5>
                        <h2><?php echo $events; ?></h2>
                    </div>
                </div>

                <!-- Tithes -->
                <div class="col-md-3">
                    <div class="card bg-warning text-white p-3">
                        <h5>Total Tithes</h5>
                        <h2><?php echo $tithes ? $tithes : 0; ?></h2>
                    </div>
                </div>

                <!-- Attendance -->
                <div class="col-md-3">
                    <div class="card bg-dark text-white p-3">
                        <h5>Attendance Records</h5>
                        <h2><?php echo $attendance; ?></h2>
                    </div>
                </div>

            </div>

            <!-- Welcome Section -->
            <div class="mt-5">
                <h4>Welcome, <?php echo $_SESSION['username']; ?> 👋</h4>
                <p>This is your Church Management System dashboard. Use the menu to manage church activities.</p>
            </div>

        </div>

    </div>
</div>

</body>
</html>