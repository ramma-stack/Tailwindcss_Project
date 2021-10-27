<?php require_once("../includes/topic.php");
in(0); ?>

<?php

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = hash('gost', $_POST['password']);
    $check = $user->get_user("`username` = '$username' and `password` = '$password'");
    if ($check) {
        $session->user($check);
        direction("index.php");
    } else {
        echo "Password or Username Correct!";
    }
}

?>

<body class="bg-blue-50 font-Ubuntu">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" class="bg-gray-600 mt-5 m-auto rounded-md p-5 w-3/5 flex flex-col" method="post">
        <input class="p-2 m-1 rounded-md focus:border-blue-500 border-2 outline-none" type="text" name="username">
        <input class="p-2 m-1 rounded-md outline-none" type="text" name="password">
        <select class="p-2 m-1 rounded-md outline-none" name="rule" id="">
            <option value="0">Editor</option>
            <option value="1">Admin</option>
        </select>
        <button name="submit" class="p-1 m-1 text-white text-xl bg-green-600 rounded-md outline-none">Login</button>
    </form>
</body>

</html>