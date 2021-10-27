<?php 


?>
<html lang="en">
<head>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body class="container m-auto bg-white">
    <header class=" m-auto max-h-full">
        <section class="xl:flex my-5 justify-between font-Merr mx-5">
            <div class="flex mb-5 xl:mb-0 xl:justify-start justify-center items-center">
                <div class=" bg-gradient-to-r from-purple-400 to-red-400 rounded-md w-10 h-10 mr-2
            "></div>
                <a class="text-gray-800 font-Merr font-medium text-3xl" href="">Logo</a>
            </div>
            <ul
                class="sm:flex sm:justify-center sm:items-center text-gray-700 font-Merr font-normal text-lg">
                <li>
                    <a class=" flex justify-center  mb-1 underline-purple-700 mx-2.5 transition duration-200 hover:underline hover:text-purple-600
              " href="">Home</a>
                </li>
                <li>
                    <a class="
                    flex
                    justify-center 
                    mb-1
                underline-purple-700
                mx-2.5
                transition
                duration-200
                hover:underline
                hover:text-purple-600
              " href="">Shop</a>
                </li>
                <li>
                    <a class="
                    flex
                    justify-center 
                    mb-1
                underline-purple-700
                mx-2.5
                transition
                duration-200
                hover:underline
                hover:text-purple-600
              " href="">Blog</a>
                </li>
                <li>
                    <a class="
                    flex
                    justify-center 
                    mb-1
                underline-purple-700
                mx-2.5
                transition
                duration-200
                hover:underline
                hover:text-purple-600
              " href="">Contact</a>
                </li>
                <li class="
                flex
                justify-center
                mb-1
                w-40
                m-auto
                sm:w-auto
                sm:m-0
                btn1
            ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-1.5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <a href="">Cart (<span>0</span>)</a>
                </li>
            </ul>
        </section>
        <section class="md:flex justify-between mx-5">
            <div class="mt-10 flex justify-center items-center">
                <div class="flex-col justify-center">
                    <h1 class="text-2xl sm:text-4xl xl:text-5xl mb-3 font-Merr font-medium">
                        Some Catchy Title Here
                    </h1>
                    <p class=" uppercase w-64 md:w-96 mb-3 text-md font-medium">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius!
                    </p>
                    <button class="
                p-3.5
                px-6
                text-white
                uppercase
                font-medium font-Merr
                bg-gradient-to-r
                from-red-500
                to-pink-500
                hover:opacity-80
                rounded-full
                transition
                duration-200
                hover:bg-purple-600
              ">
                        Shop Now
                    </button>
                </div>
            </div>
            <div class="">
                <img class="md:mt-20 mt-10 transform scale-75 md:scale-100" src="image/hero-img.svg" alt="" />
            </div>
        </section>
    </header>
    <main>
     <section class="flex justify-between mb-5 mx-5 mt-28">
      <h1 class="text-gray-800 font-semibold font-Merr text-xl">Men's Collections</h1>
      <button class="flex text-gray-800 font-semibold font-Merr text-md transition duration-200 hover:text-purple-600">
          Viwe All
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
          </svg>
      </button>
     </section>
     <section class="grid grid-cols-8 mx-5 mt-5 gap-10">
        <div class="col-span-8 sm:col-span-4 xl:col-span-2 shadow-lg shadow-gray-900 rounded-lg overflow-hidden">
            <div class="overflow-hidden">
                <img class="w-full transition duration-200 transform hover:scale-110" src="image/products/men/product1.jpg" alt="">
            </div>
            <div class="m-5">
               <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold">Mens-T-Shert</h3>
               <div class="flex mb-3 justify-start">
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-black"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-blue-800"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-white"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-red-800"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-green-800"></button>
               </div>
               <div class="flex mb-3">
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">S</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">M</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">L</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XL</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XXL</button>
                </div>
                <div class="flex justify-between my-4">
                    <button class="btn1 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                          </svg>
                        Add To Cart</button>
                        <button class="btn text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                              </svg>
                            Viwe Details</button>
                </div>
            </div>
        </div>
        <div class="col-span-8 sm:col-span-4 xl:col-span-2 shadow-lg shadow-gray-900 rounded-lg overflow-hidden">
            <div class="overflow-hidden">
                <img class="w-full transition duration-200 transform hover:scale-110" src="image/products/men/product2.jpg" alt="">
            </div>
            <div class="m-5">
               <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold">Slim Khaki Turses</h3>
               <div class="flex mb-3 justify-start">
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-black"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-blue-800"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-white"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-red-800"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-green-800"></button>
               </div>
               <div class="flex mb-3">
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">S</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">M</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">L</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XL</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XXL</button>
                </div>
                <div class="flex justify-between my-4">
                    <button class="btn1 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                          </svg>
                        Add To Cart</button>
                        <button class="btn text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                              </svg>
                            Viwe Details</button>
                </div>
            </div>
        </div>
        <div class="col-span-8 sm:col-span-4 xl:col-span-2 shadow-lg shadow-gray-900 rounded-lg overflow-hidden">
            <div class="overflow-hidden">
                <img class="w-full transition duration-200 transform hover:scale-110" src="image/products/men/product3.jpg" alt="">
            </div>
            <div class="m-5">
               <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold">Nike Shoes</h3>
               <div class="flex mb-3 justify-start">
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-black"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-blue-800"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-white"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-red-800"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-green-800"></button>
               </div>
               <div class="flex mb-3">
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">S</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">M</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">L</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XL</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XXL</button>
                </div>
                <div class="flex justify-between my-4">
                    <button class="btn1 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                          </svg>
                        Add To Cart</button>
                        <button class="btn text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                              </svg>
                            Viwe Details</button>
                </div>
            </div>
        </div>
        <div class="col-span-8 sm:col-span-4 xl:col-span-2 shadow-lg shadow-gray-900 rounded-lg overflow-hidden">
            <div class="overflow-hidden">
                <img class="w-full transition duration-200 transform hover:scale-110" src="image/products/men/product4.jpg" alt="">
            </div>
            <div class="m-5">
               <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold">Wirst Watch</h3>
               <div class="flex mb-3 justify-start">
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-black"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-blue-800"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-white"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-red-800"></button>
                   <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-green-800"></button>
               </div>
               <div class="flex mb-3">
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">S</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">M</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">L</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XL</button>
                   <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XXL</button>
                </div>
                <div class="flex justify-between my-4">
                    <button class="btn1 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                          </svg>
                        Add To Cart</button>
                        <button class="btn text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                              </svg>
                            Viwe Details</button>
                </div>
            </div>
        </div>
     </section>
     <section class="flex justify-between mb-5 mx-5 mt-28">
        <h1 class="text-gray-800 font-semibold font-Merr text-xl">Women's Collections</h1>
        <button class="flex text-gray-800 font-semibold font-Merr text-md transition duration-200 hover:text-purple-600">
            Viwe All
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </button>
       </section>
       <section class="grid grid-cols-8 mx-5 mt-5 gap-10">
          <div class="col-span-8 sm:col-span-4 xl:col-span-2 shadow-lg shadow-gray-900 rounded-lg overflow-hidden">
              <div class="overflow-hidden">
                  <img class="w-full transition duration-200 transform hover:scale-110" src="image/products/women/product1.jpg" alt="">
              </div>
              <div class="m-5">
                 <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold">V Neck Teassel Cope</h3>
                 <div class="flex mb-3 justify-start">
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-black"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-blue-800"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-white"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-red-800"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-green-800"></button>
                 </div>
                 <div class="flex mb-3">
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">S</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">M</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">L</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XL</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XXL</button>
                  </div>
                  <div class="flex justify-between my-4">
                      <button class="btn1 text-sm">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                          Add To Cart</button>
                          <button class="btn text-sm">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                              Viwe Details</button>
                  </div>
              </div>
          </div>
          <div class="col-span-8 sm:col-span-4 xl:col-span-2 shadow-lg shadow-gray-900 rounded-lg overflow-hidden">
              <div class="overflow-hidden">
                  <img class="w-full transition duration-200 transform hover:scale-110" src="image/products/women/product2.jpg" alt="">
              </div>
              <div class="m-5">
                 <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold">Slim Khaki Turses</h3>
                 <div class="flex mb-3 justify-start">
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-black"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-blue-800"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-white"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-red-800"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-green-800"></button>
                 </div>
                 <div class="flex mb-3">
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">S</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">M</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">L</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XL</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XXL</button>
                  </div>
                  <div class="flex justify-between my-4">
                      <button class="btn1 text-sm">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                          Add To Cart</button>
                          <button class="btn text-sm">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                              Viwe Details</button>
                  </div>
              </div>
          </div>
          <div class="col-span-8 sm:col-span-4 xl:col-span-2 shadow-lg shadow-gray-900 rounded-lg overflow-hidden">
              <div class="overflow-hidden">
                  <img class="w-full transition duration-200 transform hover:scale-110" src="image/products/women/product3.jpg" alt="">
              </div>
              <div class="m-5">
                 <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold">Prented Wrap Dress</h3>
                 <div class="flex mb-3 justify-start">
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-black"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-blue-800"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-white"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-red-800"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-green-800"></button>
                 </div>
                 <div class="flex mb-3">
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">S</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">M</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">L</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XL</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XXL</button>
                  </div>
                  <div class="flex justify-between my-4">
                      <button class="btn1 text-sm">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                          Add To Cart</button>
                          <button class="btn text-sm">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                              Viwe Details</button>
                  </div>
              </div>
          </div>
          <div class="col-span-8 sm:col-span-4 xl:col-span-2 shadow-lg shadow-gray-900 rounded-lg overflow-hidden">
              <div class="overflow-hidden">
                  <img class="w-full transition duration-200 transform hover:scale-110" src="image/products/women/product4.jpg" alt="">
              </div>
              <div class="m-5">
                 <h3 class="text-dark-800 mb-3 text-md font-Merr font-semibold">High Waist Denim Skirt</h3>
                 <div class="flex mb-3 justify-start">
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-black"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-blue-800"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-white"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-red-800"></button>
                     <button class="shadow-lg shadow-gray-900 w-6 h-6 mr-1 rounded-full bg-green-800"></button>
                 </div>
                 <div class="flex mb-3">
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">S</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">M</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">L</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XL</button>
                     <button class="border text-gray-500 border-dark-50 rounded-md p-0.5 px-1.5 mx-1">XXL</button>
                  </div>
                  <div class="flex justify-between my-4">
                      <button class="btn1 text-sm">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                          Add To Cart</button>
                          <button class="btn text-sm">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                              Viwe Details</button>
                  </div>
              </div>
          </div>
       </section>
       <section class="mx-5">
           <div class="flex rounded-md overflow-hidden flex-row my-20 shadow-lg shadow-black">
               <div class="lg:w-3/5 bg-gradient-to-r from-black via-purple-900 to-transparent">
                <div class="lg:w-1/2 text-pink-50 m-10">
                    <h1 class=" text-3xl mb-4 font-Merr font-bold">Subscribe to get our offers first</h1>
                    <p class="text-base mb-4 font-normal ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis fugit est placeat praesentium quas aspernatur architecto quae quisquam perferendis dolorem!</p>
                    <input class="w-full mb-4 font-Merr outline-none bg-gray-600 p-3 rounded-lg" type="text" placeholder="Enter email address">
                    <button class="w-full font-Merr text-lg p-3 bg-red-600 rounded-lg transition duration-200 hover:opacity-80">Subscribe</button>
                </div>
               </div>
               <div class="hidden lg:inline-block w-2/5">
                   <img class="h-96" src="image/subscribe-banner.png" alt="">
               </div>
           </div>
       </section>
    </main>
    <footer class="mx-5">
     <hr>
     <div class="sm:flex flex-row justify-center font-Merr text-gray-500 justify-between mb-10">
         <div class="flex flex-wrap justify-center m-5">
             <a class="mr-2 sm:mr-5 transition duration-200 hover:text-purple-400" href="">About</a>
             <a class="mr-2 sm:mr-5 transition duration-200 hover:text-purple-400" href="">Privacy Policy</a>
             <a class="mr-2 sm:mr-5 transition duration-200 hover:text-purple-400" href="">Terms of Services</a>
         </div>
         <p class="mt-5 flex justify-center">@CopyRight 2021</p>
     </div>
    </footer>

</body>

</html>