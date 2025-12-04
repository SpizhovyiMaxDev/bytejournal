<?php
require_once __DIR__ . '/constants.php';

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($connection->connect_errno) {
    die('Database connection failed: ' . $connection->connect_error);
}
