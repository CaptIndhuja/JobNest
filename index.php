<!DOCTYPE html>
<html>

<head>

    <title>Job Tracker</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container mt-5">

    <h1 class="text-center mb-4">
        Smart Student Job Tracker
    </h1>

    <div class="card p-4 shadow">

        <input 
            type="text"
            id="company"
            class="form-control mb-3"
            placeholder="Enter Company Name"
        >

        <input 
            type="text"
            id="role"
            class="form-control mb-3"
            placeholder="Enter Role Name"
        >

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