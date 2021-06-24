<?php
require_once 'connectionDB.php';

$output = ['success' => false];
$data = json_decode(file_get_contents('php://input'), true);


if (!$connect) {
    $output['message'] = "Error: Unable to connect to MySQL." . mysqli_connect_error();
    goto output;
}

$email = mysqli_real_escape_string($connect, $data['email']);
$password = $data['password'];
$fullName = mysqli_real_escape_string($connect, "{$data['first_name']} {$data['last_name']}");
$password = md5($password);


$result = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '{$email}'");

if (mysqli_num_rows($result)) {
    $output['message'] = "This email is already taken. Please choose a different one.";
    goto output;
}

mysqli_query($connect, "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$fullName', '$email', '$password')");

$result = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = " . mysqli_insert_id($connect));

if (mysqli_num_rows($result)) {

    $user = mysqli_fetch_assoc($result);

    $_SESSION['user'] = $user;
    unset($user['id'], $user['password']);

    $output = [
        'success' => true,
        'user' => $user
    ];
} else {
    $output['message'] = "Cannot create a user.";
}

output:
header('Content-Type: application/json');
echo json_encode($output);