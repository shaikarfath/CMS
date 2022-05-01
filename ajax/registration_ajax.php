<?php

require "../include/config.php";
session_start();
$name = isset($_POST['name']) && !empty(trim($_POST['name'])) ? $_POST['name'] : null;
$email = isset($_POST['email']) && !empty(trim($_POST['email'])) ? $_POST['email'] : null;
$password = isset($_POST['password']) && !empty(trim($_POST['password'])) ? $_POST['password'] : null;

if (is_null($name) || is_null($email) || is_null($password)) {
    echo json_encode(['status' => 'empty', 'message' => 'Fields is Required']);
    exit;
}

$q = "SELECT * FROM `users` WHERE email='$email'";
$result = $db->select($q);
if ($result) {
    echo json_encode(['status' => 'error', 'message' => 'Email Already Existed']);
    exit;
}

$result = $db->insert(
    'users',
    [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
    ]
);
if ($result['status'] == 'success') {
    $q = "SELECT * FROM `users` WHERE email='$email'";
    $result = $db->select($q);
    $_SESSION['status'] = $result;
    $_SESSION['login_status'] = true;
    echo json_encode(['status' => 'success', 'message' => 'Registered Successfully']);
    exit;
}
echo json_encode($result);
exit;
?>
