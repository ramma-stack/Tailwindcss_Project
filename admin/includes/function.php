<?php
function direction($url)
{
    header("Location:$url");
}

function in($i)
{
    global $session;
    
    if ($i == 0 && $session->user_login()) {
        direction("index.php");
    }
    if ($i == 1 && !$session->user_login()) {
        direction("login.php");
    }
    if ($i == 2 && (!$session->user_login() || $session->user_login() && $session->rule != 1)) {
        direction("index.php");
    }
}

function name($url)
{
    if ("/First_Tailwind/admin/public/$url" == $_SERVER['PHP_SELF']) {
        echo " bg-blue-800 text-white ";
    }
}

function rule($x)
{
    global $session;
    if ($session->rule == 1) {
        echo '<svg hidden xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 text-gray-400 transform" id="visIcon'.$x.'" viewBox="0 0 20 20" fill="currentColor" >';
        }else{
          echo '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 text-gray-400 transform translate-x-6 " id="visIcon'.$x.'" viewBox="0 0 20 20" fill="currentColor" >';
         }
}

if (isset($_GET['logout'])) {
    setcookie("username", "", time() - 3600);
    setcookie("password", "", time() - 3600);
    $session->logout();
    direction("login.php");
}
