<?php

include 'db.php';

$id = $_POST['id'];

$query = "DELETE FROM jobs WHERE id = $id";

$db->exec($query);

echo "Deleted Successfully";

?>