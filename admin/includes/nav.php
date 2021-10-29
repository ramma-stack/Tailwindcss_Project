<?php require_once("topic.php");
ob_start(); ?>

<body class="bg-blue-50 font-Ubuntu group">

  <section class="flex w-full transition duration-200 fixed z-10 shadow-lg p-2.5 px-8 bg-white items-center justify-between">

    <div class="flex w-72">
      <div class="flex bg-gradient-to-r from-purple-400 to-red-400 rounded-md w-10 h-10 mr-2"></div>
      <a class="text-gray-800 font-Merr font-medium text-3xl" href="../public/index.php">Logo</a>
    </div>
    <div class="flex w-11/12 items-center justify-between">

    <span id="menuleft" class="hidden lg:inline">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" id="menuicon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" id="closeicon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </span>

    <span id="menuhide" class="inline lg:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" id="openmenu" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" id="closemenu" fill="none" viewBox="0 0 24 24" stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </span>

      <div class="flex">
        <a href="?logout" class="text-gray-700 font-Merr mx-2 font-medium text-3xl">Logout</a>
        <div class="w-10 h-10 rounded-full bg-blue-800"></div>
      </div>
    </div>
  </section>

    <section id="menu" class="transform lg:translate-x-0 -translate-x-64 transition-all duration-300 w-60 relative p-2 pl-1 h-screen pt-12 bg-gray-50">
      <ul class="pt-8 p-4 font-Ubuntu text-sm text-gray-600">

        <li class="rounded-md   overflow-hidden hover:bg-blue-800 flex cursor-pointer hover:text-white p-2.5 mt-1 <?php name("index.php"); ?> ">
          <a class="flex items-center whitespace-nowrap " href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
            <p id="title0" class="ml-10 lg:ml-3 transition-width duration-500 ">Dashboard</p>
          </a>
        </li>

        <li class="rounded-md overflow-hidden hover:bg-blue-800 flex cursor-pointer transition duration-100 hover:text-white p-2.5 mt-1 <?php name("post.php"); ?> ">
          <a class="flex  whitespace-nowrap items-center" href="post.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
            </svg>
            <p class="ml-3 " id="title1">Post</p>
          </a>
        </li>

        <li class="rounded-md   overflow-hidden hover:bg-blue-800 flex cursor-pointer transition duration-100 hover:text-white p-2.5 mt-1 <?php name("viewyourpost.php"); ?> ">
          <a class="flex  whitespace-nowrap items-center" href="viewyourpost.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            <p class="ml-3 " id="title2">View Your Post</p>
          </a>
        </li>

        <li class="rounded-md   overflow-hidden hover:bg-blue-800 flex cursor-pointer transition duration-100 hover:text-white p-2.5 mt-1 <?php name("viewallpost.php"); ?> " id="visLi">
          <a class="flex  whitespace-nowrap items-center" href="viewallpost.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
            <p class="ml-3 " id="title3">View All Posts</p>
            <?php rule(0); ?>
            <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" />
            <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
            </svg>
          </a>
        </li>

        <li class="rounded-md   overflow-hidden hover:bg-blue-800 flex cursor-pointer transition duration-100 hover:text-white p-2.5 mt-1 <?php name("adduser.php"); ?> " id="visLi1">
          <a class="flex  whitespace-nowrap items-center" href="adduser.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
            <p class="ml-3 " id="title4">Add User</p>
            <?php rule(1); ?>
            <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" />
            <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
            </svg>
          </a>
        </li>

        <li class="rounded-md  overflow-hidden hover:bg-blue-800 flex cursor-pointer transition duration-100 hover:text-white p-2.5 mt-1 <?php name("viewalluser.php"); ?> " id="visLi2">
          <a class="flex  whitespace-nowrap items-center" href="viewalluser.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="ml-3 " id="title5">View All Users</p>
            <?php rule(2); ?>
            <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" />
            <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
            </svg>
          </a>
        </li>

      </ul>
      <div class="absolute bg-blue-800 w-full py-2 bottom-5 left-0">
        <p class="flex justify-center xl:text-sm font-bold text-white">Welcome</p>
      </div>
    </section>