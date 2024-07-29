<?php
$server = "localhost:3306";
$user = "root";
$pass = "";
$db = "chetan";
$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = intval($_POST['id']); // Get the query ID from POST data

        // Sanitize input
        $id = mysqli_real_escape_string($conn, $id);

        $sql = "DELETE FROM `contact` WHERE `no` = $id";
        if (mysqli_query($conn, $sql)) {
            echo 'success';
        } else {
            echo 'error';
        }
    } else {
        echo 'error'; // Handle the case where 'id' is not set
    }
}

mysqli_close($conn);
?>