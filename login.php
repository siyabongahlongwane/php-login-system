<?php
include './conn.php';

function consoleLog($msg) {
    echo "<script>console.log(`" . json_encode($msg) . "`);</script>";
}

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!empty($email) && !empty($password)) {
        $selectQuery = "SELECT name, email, password FROM `appusers` WHERE email = '$email'";
        $result = mysqli_query($conn, $selectQuery);
        if (!$result) {
        session_start();
            $_SESSION["msg"] = "User not found!";
            $_SESSION["alert"] = "alert alert-danger alert-dismissible";
            header('location: login-page.php');
        } else {
        session_start();
            $row = mysqli_fetch_assoc($result);
            if ($password !== $row["password"]) {
                $_SESSION["msg"] = "Incorrect Password!";
                $_SESSION["alert"] = "alert alert-danger alert-dismissible";
                header('location: login-page.php');
            } else {
                $_SESSION["msg"] = "Login Successful!";
                $_SESSION["alert"] = "alert alert-success alert-dismissible";
                $_SESSION["name"] = $row["name"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["password"] = $row["password"];
                header('location: index.php');
            }
        }
    }else{
        session_start();
        $_SESSION["msg"] = "Please insert all credentials!";
        $_SESSION["alert"] = "alert alert-danger alert-dismissible";
        header('location: login-page.php');
    }
}