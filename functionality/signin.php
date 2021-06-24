<?php

$output = ['success' => false];
$data = json_decode(file_get_contents('php://input'), true);

$connect = mysqli_connect('localhost', 'admin', 'password', 'my_db');

if (!$connect) {
    $output['message'] = "Error: Unable to connect to MySQL." . mysqli_connect_error();
    goto output;
}

$username = mysqli_real_escape_string($connect, $data['username']);
$password = md5($data['password']);

$result = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$username' AND `password` = '$password'");

if (mysqli_num_rows($result)) {
    $user = mysqli_fetch_assoc($result);

    $_SESSION['user'] = $user;
    unset($user['id'], $user['password']);

    $output = [
        'success' => true,
        'user' => $user
    ];
} else {
    $output['message'] = 'Can\'t find user';
}

output:
header('Content-Type: application/json');
echo json_encode($output);