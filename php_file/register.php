<?php include "../database/connection.php"; ?>

<?php

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pass'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $sql = "SELECT * FROM register WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email already exists, please choose a new email'); window.location='../signup.php';</script>";
    } else {
        // Email does not exist in the database, so the details will be stored in the database
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        // Set timezone
        date_default_timezone_set('Asia/Kolkata');
        $signup_time = date('Y-m-d H:i:s a');
        $sql = "INSERT INTO register (username, email, password, created_at) VALUES ('$username', '$email', '$password_hash', '$signup_time')";

        if (!(mysqli_query($conn, $sql))) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } else {
            echo "<script>alert('You have successfully created a new user. Please login'); window.location = '../index.php';</script>";
        }
    }
}

mysqli_close($conn);
?>
