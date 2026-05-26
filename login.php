<?php

session_start();

include 'db.php';

if(isset($_POST['username'])){

    $username = trim($_POST['username']);

    $password = trim($_POST['password']);

    $query = "
    SELECT * FROM users

    WHERE username='$username'
    AND password='$password'
    ";

    $result = $db->query($query);

    $user = $result->fetchArray();

    if($user){

        $_SESSION['user'] = $user['username'];

        $_SESSION['user_id'] = $user['id'];

        header("Location: dashboard.php");

        exit();

    }else{

        $error = "
        <div class='alert alert-danger mt-3'>
        Invalid Credentials
        </div>
        ";

    }

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-4">

            <div class="card p-4 shadow">

                <h2 class="text-center mb-4">
                    Login
                </h2>
                 
                <?php
                    if(isset($error)){
                        echo $error;
                    }
                ?>
                <form method="POST">

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

                    <button class="btn btn-primary w-100">
                        Login
                    </button>
                <a href="register.php" class="btn btn-link mt-3">
                    Don't have an account? Register
                </a>
                </form>

    
            </div>

        </div>

    </div>

</div>

</body>
</html>