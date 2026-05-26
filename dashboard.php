<?php

session_start();

if(!isset($_SESSION['user'])){

    header("Location: login.php");

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>

<body>

<nav class="navbar navbar-dark bg-dark px-4">

    <span class="navbar-brand">
        Smart Job Tracker
    </span>

    <div>

        <a href="applications.php" class="btn btn-warning">
            View Applications
        </a>

        <a href="logout.php" class="btn btn-danger">
            Logout
        </a>

    </div>

</nav>

<div class="container mt-5">

    <h2 class="mb-4">
        Welcome,
        <?php echo $_SESSION['user']; ?>
    </h2>

    <div class="card p-4 shadow">

        <input 
        type="text"
        id="company"
        class="form-control mb-3"
        placeholder="Company Name">

        <input 
        type="text"
        id="role"
        class="form-control mb-3"
        placeholder="Role Name">

        <select id="status" class="form-control mb-3">

            <option>Applied</option>

            <option>Interview Scheduled</option>

            <option>Selected</option>

            <option>Rejected</option>

        </select>

        <button class="btn btn-primary" id="addBtn">
            Add Application
        </button>

    </div>

    <div id="jobData" class="mt-4"></div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="script.js"></script>

</body>
</html>