<?php

require "../include/config.php";
session_start();
$email = isset($_POST['email']) && !empty(trim($_POST['email'])) ? $_POST['email'] : null;
$password = isset($_POST['password']) && !empty(trim($_POST['password'])) ? $_POST['password'] : null;

if (is_null($email) || is_null($password)) {
    echo json_encode(['status' => 'empty', 'message' => 'Fields is Required']);
    exit;
}

$q = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
$result = $db->select($q);
if (!$result) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid Credentials']);
    exit;
}
$_SESSION['user'] = $result;
$_SESSION['login_status'] = true;
echo json_encode(['status' => 'success', 'message' => 'Login Successfully']);
exit;
?>
