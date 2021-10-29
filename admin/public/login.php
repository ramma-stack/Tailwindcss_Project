<?php
require_once("../includes/topic.php");
require_once("../includes/checklogin.php");
in(0); ?>

<body class="bg-purple-50 font-Ubuntu">
    <section class="flex h-screen flex-col justify-center items-center">
        <div class="w-5/6 md:w-4/6 xl:w-4/12 p-10 bg-white">
            <div class="flex mb-10">
                <div class="flex bg-gradient-to-r from-purple-400 to-red-400 rounded-md w-9 h-9 mr-2"></div>
                <div class="flex items-start">
                    <a class="text-red-500 font-medium text-3xl" href="../public/index.php">Logo</a>
                </div>
            </div>
            <span class="text-gray-600 font-normal">Hello! let's get started
                <p class="text-gray-700 text-sm">Sign in to continue.</p>
            </span>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" class="flex flex-col" method="post">
                <input value="<?= $username ?>" class="p-3 px-6 my-5 text-sm outline-none border border-gray-300 <?php if(!empty($error)){echo "border-red-300";} ?> focus:border-blue-400 transition-all duration-200 " type="text" placeholder="Username" name="username">
                <input value="<?= $password ?>" class="p-3 px-6 mb-2 text-sm outline-none border border-gray-300 <?php if(!empty($error)){echo "border-red-300";} ?> focus:border-blue-400 transition-all duration-200 " type="password" placeholder="Password" name="password">
                <div class="w-full">
                    <p class="text-red-600 text-sm font-normal mb-5"><?php if(!empty($error)){echo "Oops, that's not the right password or username. Please try again!";} ?></p>
                </div>
                <span class="flex flex-row justify-between">
                    <button name="submit" class="w-1/3 p-2 text-white sm:text-xl bg-red-500 hover:bg-red-400 transition-colors duration-300 rounded-xl">SIGN IN</button>
                    <select class="w-1/3 px-2 text-sm outline-none border border-gray-300 focus:border-blue-400 transition-all duration-200 " name="rule" id="">
                        <option <?php if ($rule == 0) echo ' selected="selected"'; ?> value="0">Editor</option>
                        <option <?php if ($rule == 1) echo ' selected="selected"'; ?> value="1">Admin</option>
                    </select>
                </span>
                <div class="flex flex-col sm:flex-row items-center justify-between mt-5">
                    <span class="flex items-center">
                        <input class="chekcustom" type="checkbox" name="" id="">
                        <p class="text-gray-700 text-xs">Keep me signed in</p>
                    </span>
                    <a class="underline mt-3 sm:mt-0 text-sm text-gray-900" href="">Forgot password?</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>