<?php
include("../DataBase.php");
$db = new DataBase();
$conn = $db->getInstance();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "Email: $email \n";
    echo "Password: $password";
}
