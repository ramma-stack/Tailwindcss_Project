<?php
$username = "";
$password = "";
$rule = "";
$error="";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rule = $_POST['rule'];
    $check = $user->get_user("`username` = '$username' and `password` = '" . hash('gost', $password) . "'");
    if ($check && $check->rule == $rule) {
        $session->user($check);
        direction("index.php");
    }else{
        $error = "Username or Password Correct!";
    }
}
