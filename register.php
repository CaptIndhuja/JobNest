<?php

include 'db.php';

$message = "";

if(isset($_POST['username'])){

    $full_name = trim($_POST['full_name']);

    $email = trim($_POST['email']);

    $phone = trim($_POST['phone']);

    $college = trim($_POST['college']);

    $career_role = trim($_POST['career_role']);

    $username = trim($_POST['username']);

    $password = trim($_POST['password']);

    $query = "
    INSERT INTO users(

        full_name,
        email,
        phone,
        college,
        career_role,
        username,
        password

    )

    VALUES(

        '$full_name',
        '$email',
        '$phone',
        '$college',
        '$career_role',
        '$username',
        '$password'

    )
    ";

    $result = $db->exec($query);

    if($result){

        header("Location: login.php");

        exit();

    }else{

        $message = "
        <div class='alert alert-danger'>
        Username or Email Already Exists
        </div>
        ";

    }

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-5">

            <div class="card p-4 shadow">

                <h2 class="text-center mb-4">
                    Register
                </h2>

                <?php echo $message; ?>

                <form method="POST">

                    <input 
                    type="text"
                    name="full_name"
                    class="form-control mb-3"
                    placeholder="Full Name"
                    required>

                    <input 
                    type="email"
                    name="email"
                    class="form-control mb-3"
                    placeholder="Email Address"
                    required>

                    <input 
                    type="text"
                    name="phone"
                    class="form-control mb-3"
                    placeholder="Phone Number"
                    required>

                    <input 
                    type="text"
                    name="college"
                    class="form-control mb-3"
                    placeholder="College Name"
                    required>

                    <select 
                    name="career_role"
                    class="form-control mb-3">

                        <option>Software Developer</option>

                        <option>Data Analyst</option>

                        <option>AI Engineer</option>

                        <option>Web Developer</option>

                    </select>

                    <input 
                    type="text"
                    name="username"
                    class="form-control mb-3"
                    placeholder="Enter Username"
                    required>

                    <input 
                    type="password"
                    name="password"
                    class="form-control mb-3"
                    placeholder="Enter Password"
                    required>

                    <button class="btn btn-success w-100">
                        Register
                    </button>

                </form>

                <a href="login.php" class="btn btn-link mt-3">
                    Already have account? Login
                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>