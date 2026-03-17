<?php
session_start();

if (!isset($_SESSION['role']) || ($_SESSION['role'] != 'pastor' && $_SESSION['role'] != 'member')) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pastor Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }

        .sidebar {
            height: 100vh;
            background: #2c3e50;
            color: white;
            padding: 20px;
        }

        .sidebar h4 {
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            background: #34495e;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .header {
            background: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <h4><i class="fa fa-church"></i> CMS</h4>

            <p>👤 <?php echo $_SESSION['username']; ?></p>

            <a href="pastor_dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
            <a href="view_members.php"><i class="fa fa-users"></i> Members</a>
            <a href="view_events.php"><i class="fa fa-calendar"></i> Events</a>
            <a href="attendance.php"><i class="fa fa-check"></i> Attendance</a>

            <hr>

            <a href="logout.php" class="text-danger"><i class="fa fa-sign-out-alt"></i> Logout</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">

            <!-- Header -->
            <div class="header">
                <h3>Welcome, <?php echo $_SESSION['username']; ?> 🙏</h3>
                <p>Manage church activities efficiently</p>
            </div>

            <!-- Cards -->
            <div class="row">

                <div class="col-md-4">
                    <div class="card bg-primary text-white p-3">
                        <h5><i class="fa fa-users"></i> Members</h5>
                        <p>View all church members</p>
                        <a href="view_members.php" class="btn btn-light btn-sm">View</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-success text-white p-3">
                        <h5><i class="fa fa-calendar"></i> Events</h5>
                        <p>Check upcoming events</p>
                        <a href="view_events.php" class="btn btn-light btn-sm">View</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-dark text-white p-3">
                        <h5><i class="fa fa-check"></i> Attendance</h5>
                        <p>Track member attendance</p>
                        <a href="attendance.php" class="btn btn-light btn-sm">Open</a>
                    </div>
                </div>

            </div>

            <!-- Extra Section -->
            <div class="mt-5">
                <div class="card p-4">
                    <h5>Quick Actions</h5>
                    <p>Use the menu to navigate through the system. Keep records updated regularly.</p>
                </div>
            </div>

        </div>

    </div>
</div>

</body>
</html>