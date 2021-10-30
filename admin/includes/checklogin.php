<?php
if (!empty($_COOKIE['username'])) {
    
    $username = $_COOKIE['username'];
    $check = $user->get_user("`username` = '$username'");
    if (!empty($check)) {
        $session->user($check);
    }
}
$username = "";
$password = "";
$rule = "";
$error = "";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rule = $_POST['rule'];
    $check = $user->get_user("`username` = '$username' and `password` = '" . hash('gost', $password) . "'");
    if ($check && $check->rule == $rule) {
        $session->user($check);
        direction("index.php");
        if (!empty($_POST['remember'])) {
            setcookie("username", $username, time() + (200));
            setcookie("password", $password, time() + (200));
        }
    } else {
        $error = "Username or Password Correct!";
    }
}
