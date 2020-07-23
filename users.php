<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');

// Query
$query = "SELECT * FROM users";

// Get results
$result = mysqli_query($conn, $query);

// Fetch data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);


?>