<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
include "./database/connection.php";

// Get form data
$username = $_POST['usrname'];
$password = $_POST['password'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['usrname'];
    $sql = "SELECT * FROM register WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];
        $userId = $row['id'];
        $email = $row['email'];


        if (password_verify($password, $stored_password)) {
            $userId = $row['id'];
            $sql = "SELECT * FROM login WHERE id = '$userId'";
            $result = $conn->query($sql);

            if ($result->num_rows == 0) {
                $sql = "INSERT INTO login (id, username, password) VALUES ('$userId', '$username', '$stored_password')";
                if (!(mysqli_query($conn, $sql))) {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }

            // Set session
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $userId;

            echo "<script>alert('Login successful!'); window.location = 'dashboard.php';</script>";
            exit;
        } else {
            echo "<script>alert('Invalid username or password. Please try again.'); window.location = 'login.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Email not found. Please register first.'); window.location = 'signup.php';</script>";
        exit;
    }
}

mysqli_close($conn);
?>
