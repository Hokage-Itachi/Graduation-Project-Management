<?php
session_start();
include("../includes/database.php");
include("includes/notification.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE email = '$email'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $pass_hash = $row["pass_hashed"];
            if (password_verify($password, $pass_hash)) {
                $_SESSION['user'] = $email;
                echo "Success";
            } else {
                header('location: /login');
            }
        }
    } else {
        header('location: /login');
    }
} else {
    header('location: /login');
}
