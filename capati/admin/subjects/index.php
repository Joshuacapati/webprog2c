<?php 
session_start();
include '../../config/database.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: ../../index.php");
    exit();
}
$sql = "SELECT * FROM subjects ORDER BY id DESC";
$result = mysqli_query($conn,$sql)

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>Subjects</title>

    <link
        href="../../assets/vendor/bootstrap/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        href="../../assets/css/style.css"
        rel="stylesheet"
    >
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">

            <a
                class="navbar-brand"
                href="dashboard.html"
            >
                Student Portal Admin
            </a>

        </div>
    </nav>

    <div class="container py-4">
        <?php if (isset($_GET["message"])){?>
        <div class="alert alert-succes"> <?php echo $_GET ["message"]; ?></div>
         <?php } ?>

        <div class="d-flex justify-content-between mb-3">

            <div>
                <h2>Subjects</h2>

                <a href="../dashboard.php">
                    ← Dashboard
                </a>
            </div>

            <a
                href="create.php"
                class="btn btn-primary"
            >
                + Add Subject
            </a>

        </div>

        <div class="card">

            <div class="card-body">

                <table class="table">

                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Subject Name</th>
                            <th>Units</th>
                            <th>Actions</th>
                        </tr>z`
                    </thead>

                    <tbody>


                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td> <?php echo htmlspecialchars($row["subject_code"]); ?></td>

                            <td>
                                 <?php echo htmlspecialchars($row["subject_name"]); ?>
                            </td>

                            <td> <?php echo htmlspecialchars($row["units"]); ?></td>

                            <td>
                                 <a
                                  href="edit.php?id=<?php echo $row['id']; ?>"
                                 class="btn btn-warning btn-sm"
                                >
                                Edit
                                </a>

                                <form
                                action="delete.php"
                                method="POST"
                                style="display:inline;"
                                onsubmit="return confirm('Are you sure you want to delete this subject?');"
                                >
                                    <input
                                    type="hidden"
                                    name="id"
                                    value="<?php echo $row['id']; ?>"
                                    >

                                    <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    >
                                    Delete
                                    </button>

                            </td>
                        </tr>
                        <?php }?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>

</html>