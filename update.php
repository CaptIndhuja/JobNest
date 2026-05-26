<?php

include 'db.php';

$id = $_POST['id'];

$status = $_POST['status'];

$query = "
UPDATE jobs
SET status = '$status'
WHERE id = $id
";

$db->exec($query);

echo "Updated Successfully";

?>