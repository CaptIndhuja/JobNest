<?php

session_start();

include 'db.php';

$user_id = $_SESSION['user_id'];

$company = $_POST['company'];

$role = $_POST['role'];

$status = $_POST['status'];

$query = "
INSERT INTO jobs(

    user_id,
    company_name,
    role_name,
    status

)

VALUES(

    '$user_id',
    '$company',
    '$role',
    '$status'

)
";

$db->exec($query);

echo "Data Inserted Successfully";

?>