<?php
session_start();
include 'db.php';

$user_id = $_SESSION['user_id'];

$query = "
SELECT * FROM jobs

WHERE user_id = '$user_id'

ORDER BY id DESC
";

$result = $db->query($query);

while($row = $result->fetchArray()){

?>

<div class="card p-3 mt-3 shadow">

    <h4>
        <?php echo $row['company_name']; ?>
    </h4>

    <p>
        Role:
        <?php echo $row['role_name']; ?>
    </p>

    <select class="form-control updateStatus"
        data-id="<?php echo $row['id']; ?>">

        <option 
        <?php if($row['status']=="Applied") echo "selected"; ?>>
        Applied
        </option>

        <option
        <?php if($row['status']=="Interview Scheduled") echo "selected"; ?>>
        Interview Scheduled
        </option>

        <option
        <?php if($row['status']=="Selected") echo "selected"; ?>>
        Selected
        </option>

        <option
        <?php if($row['status']=="Rejected") echo "selected"; ?>>
        Rejected
        </option>

    </select>

    <button class="btn btn-danger deleteBtn mt-2"
        data-id="<?php echo $row['id']; ?>">

        Delete

        </button>

</div>

<?php

}

?>