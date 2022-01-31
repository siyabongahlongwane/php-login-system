<?php
include './conn.php';

if (isset($_POST["signup"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!empty($name) && !empty($email) && !empty($password)) {
        $insertQuery = "INSERT INTO `appusers` (name, email, password) VALUES('$name', '$email', '$password')";
        $result = mysqli_query($conn, $insertQuery);
        if ($result) {
            header('location: login-page.php');
        } else {
            die(mysqli_error($conn));
        }
    }
}
