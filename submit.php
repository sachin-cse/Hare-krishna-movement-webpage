<?php
include '../database/connection.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $msg = $_POST['msg'];

  $sql = "INSERT INTO contact (name, email, phone, message ) VALUES ('$name', '$email', '$phone', '$msg')";

  if($conn->query($sql) == TRUE){
    echo "<script> alert('your message send successfully'); window.location = '../contact.php'; </script>";
  }

  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

mysqli_close($conn);
?>