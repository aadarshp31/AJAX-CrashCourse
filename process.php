<?php 

// Connecting to Database
// host, username, pass, db name
$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');


echo 'Processing...';
// Check for Get variables
if( isset($_GET['name']) ){
    echo 'GET: Your name is ' . $_GET['name'];
}

// Check for POST variables
if( isset($_POST['name']) ){
    // echo 'POST: Your name is ' . $_POST['name'];
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($conn, $query)){
        echo 'User added to database.';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}

?>