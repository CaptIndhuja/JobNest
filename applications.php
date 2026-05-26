<?php

session_start();

if(!isset($_SESSION['user'])){

    header("Location: login.php");

}

include 'db.php';

$user_id = $_SESSION['user_id'];

$query = "
SELECT * FROM jobs

WHERE user_id = '$user_id'

ORDER BY id DESC
";

$result = $db->query($query);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Applications</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark px-4">

    <span class="navbar-brand">
        Applications
    </span>

    <a href="dashboard.php" class="btn btn-warning">
        Back To Dashboard
    </a>

</nav>

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="mb-4">
            Stored Applications
        </h2>

        <table class="table table-bordered table-hover">

            <thead class="table-dark">

                <tr>

                    <th>ID</th>

                    <th>Company</th>

                    <th>Role</th>

                    <th>Status</th>

                    <th>Created Time</th>

                </tr>

            </thead>

            <tbody>

                <?php

                while($row = $result->fetchArray()){

                ?>

                <tr>

                    <td>
                        <?php echo $row['id']; ?>
                    </td>

                    <td>
                        <?php echo $row['company_name']; ?>
                    </td>

                    <td>
                        <?php echo $row['role_name']; ?>
                    </td>

                    <td>
                        <?php echo $row['status']; ?>
                    </td>

                    <td>
                        <?php echo $row['created_at']; ?>
                    </td>

                </tr>

                <?php

                }

                ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>