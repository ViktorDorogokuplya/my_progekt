<?php

$_SESSION['user'];
session_destroy();
header('Location: ../index.php');

if (isset($_SESSION['user'])) {
    echo "Сессия существует";
} else {
    session_destroy();
    echo "Такой сессии не существует";
}
?>