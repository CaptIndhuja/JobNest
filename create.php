<?php

include 'db.php';

$db->exec("DROP TABLE IF EXISTS jobs");

$db->exec("DROP TABLE IF EXISTS users");

$db->exec("
CREATE TABLE users(

    id INTEGER PRIMARY KEY AUTOINCREMENT,

    full_name TEXT,

    email TEXT UNIQUE,

    phone TEXT,

    college TEXT,

    career_role TEXT,

    username TEXT UNIQUE,

    password TEXT

)
");

$db->exec("
CREATE TABLE jobs(

    id INTEGER PRIMARY KEY AUTOINCREMENT,

    user_id INTEGER,

    company_name TEXT,

    role_name TEXT,

    status TEXT,

    created_at DATETIME DEFAULT CURRENT_TIMESTAMP

)
");

echo "Tables Created Successfully";

?>