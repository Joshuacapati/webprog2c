<?php
session_start();
include '../config/database.php';
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: ../index.php");
    exit();
}
$students = mysqli_query($conn, "SELECT id FROM users WHERE role='student'");
$subjects = mysqli_query($conn, "SELECT id FROM subjects");
$enrollments = mysqli_query($conn, "SELECT id FROM enrollments");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>Admin Dashboard</title>

    <link
        href="../assets/vendor/bootstrap/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        href="../assets/css/style.css"
        rel="stylesheet"
    >
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">

            <span class="navbar-brand">
                Student Portal Admin
            </span>

            <a
                class="btn btn-outline-light btn-sm"
                href="../logout.php"
            >
                Logout
            </a>

        </div>
    </nav>

    <div class="container py-4">

        <h2>Admin Dashboard</h2>
    <P class="text-muted">
        Welcome, <?php echo htmlspecialchars($_SESSION["full_name"]); ?>
    </P>


        <div class="row g-3">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">

                        <h6>Student Accounts</h6>

                        <h2><?php echo mysqli_num_rows($students); ?></h2>

                        <a
                            href="students/index.php"
                            class="btn btn-primary btn-sm"
                        >
                            Manage Students
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">

                        <h6>Subjects</h6>

                        <h2><?php echo mysqli_num_rows($subjects); ?></h2>

                        <a
                            href="subjects/index.php"
                            class="btn btn-primary btn-sm"
                        >
                            Manage Subjects
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">

                        <h6>Enrollments</h6>

                        <h2><?php echo mysqli_num_rows($enrollments);?></h2>

                        <span class="text-muted small">
                            Managed from Student Records
                        </span>

                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>