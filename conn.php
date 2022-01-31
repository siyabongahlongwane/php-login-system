<?php

$conn = new mysqli('localhost', 'root', '', 'login');
if (!$conn) {
    die(mysqli_error($conn));
}
