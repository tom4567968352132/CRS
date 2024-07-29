<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost", "root", "", "chetan");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    echo "Submitted Email: $email<br>";
    echo "Submitted Password: $password<br>";

    $sql = "SELECT * FROM `register` WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        echo "Stored Email: " . $row['Email'] . "<br>";
        echo "Stored Password: " . $row['password'] . "<br>";

        if($password == 'admin') {
                    header("Location: Dashboard.php");
                    exit();
        }
        else if ($row['password'] === $password) {
            header("Location: Home.php");
            exit();
        } 
        else {
            echo "Invalid email or password";
        }
    } else {
        echo "No user found";
    }
} else {
    echo "Invalid request method";
}

mysqli_close($conn);
?>
