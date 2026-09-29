<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>Enroll Subjects</title>

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
            <span class="navbar-brand">
                Student Portal Admin
            </span>
        </div>
    </nav>

    <div class="container py-4">

        <h2>Enroll Subjects</h2>

        <p>
            <b>Student:</b>
            2026-0001 - Juan Dela Cruz
        </p>

        <a
            href="students.html"
            class="btn btn-secondary btn-sm mb-3"
        >
            ← Back
        </a>

        <div class="card">
            <div class="card-body">

                <table class="table">

                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Subject</th>
                            <th>Units</th>
                            <th>Status / Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>IT101</td>

                            <td>
                                Introduction to Computing
                            </td>

                            <td>3</td>

                            <td>
                                <span class="badge bg-success">
                                    Enrolled
                                </span>

                                <button
                                    class="btn btn-outline-danger btn-sm"
                                >
                                    Remove
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>IT102</td>

                            <td>
                                Computer Programming 1
                            </td>

                            <td>3</td>

                            <td>
                                <button
                                    class="btn btn-primary btn-sm"
                                >
                                    Enroll
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>
        </div>

    </div>

</body>

</html>