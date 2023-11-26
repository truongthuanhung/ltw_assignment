<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/f776702b05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
    <style>
        @media (max-width: 1023px) {
            #sortbox:checked~#sortboxmenu {
                opacity: 1;
            }

            #categoriesbox:checked~#categoriesboxmenu {
                opacity: 1;
            }
        }

        @media (min-width: 1023px) {
            #categoriesboxmenu {
                opacity: 1;
                border: 0;
                box-shadow: none;
            }

            #sortboxmenu {
                opacity: 1;
                border: 0;
                box-shadow: none;
            }
        }
    </style>
    <script src="https://kit.fontawesome.com/f776702b05.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="sign flex flex-row h-[30px] fixed top-0 left-0 right-0 z-50 items-center md:px-[20px] px-[10px] justify-between bg-[#f2f2f2] text-sm">
        <p class="block">Free shipping on orders above $200 (US only)</p>
        <p class="hidden md:ml-auto md:mr-[56px] mr-[10px]"><a href="./pages/Account.php">User1234</a></p>
        <p class="cursor-pointer hidden"><a href="#">Log out</a></p>
        <p class="cursor-pointer"><a href="../pages/Login.php">Log in</a></p>
    </div>
    <div class="header flex justify-between lg:px-[60px] px-[34px] bg-[#f2f2f2] fixed top-[30px] left-0 right-0 z-50">
        <div class="header__logo order-2 lg:order-1">
            <img src="../images/logo.svg" alt="">
        </div>
        <div class="header__navbar flex items-center order-1 lg:order-2 lg:mr-auto lg:ml-[62px]">
            <i class="header__navbar-icon lg:hidden fa-solid fa-bars text-3xl"></i>
            <div class="header__navbar-container custom-hidden flex flex-col absolute top-[65px] left-0 right-0 items-start lg:static lg:flex-row lg:items-center bg-white lg:bg-[#f2f2f2]">
                <div class="lg:hidden header__search-container header__navbar-item w-full md:px-[25px] px-[18px] py-[10px] relative">
                    <form action="">
                        <input type="text" id="search-info" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 pl-2.5 pr-12" placeholder="Search..." required>
                        <div class="header__search text-2xl px-4 absolute bottom-1/2 translate-y-1/2 right-[2%]">
                            <button type="submit" class="px-2 py-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>

                <div class="header__navbar-item w-full"><a href="../index.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Home</a>
                </div>
                <div class="header__navbar-item w-full"><a href="#" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Products</a>
                </div>
                <div class="header__navbar-item w-full"><a href="./News.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">News</a>
                </div>
                <div class="header__navbar-item w-full"><a href="./About.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">About</a>
                </div>
            </div>
        </div>
        <div class="header__lg-search hidden lg:block text-2xl px-4 py-[10px] cursor-pointer order-3 relative min-w-[25%]">
            <i class="fa-solid fa-magnifying-glass absolute bottom-1/2 translate-y-1/2 right-[10%]"></i>
            <div class="header__lg-search">
                <form action="">
                    <input type="text" id="search-info" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 pl-2.5 pr-12" placeholder="Search..." required>
                </form>
            </div>
        </div>
        <div class="header__icon flex items-center order-4">
            <div class="header__cart text-2xl px-4 py-[16.5px] cursor-pointer">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div class="header__user text-2xl px-4 py-[16.5px] cursor-pointer">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
    </div>

    <div class="lg:flex mt-[95px]">
        <div class="w-full lg:w-1/6 py-[10px] pl-[30px]">
            <div class="categories relative py-[10px] lg:w-full md:w-1/3 w-full">
                <input type="checkbox" id="categoriesbox" class="hidden absolute">
                <label for="categoriesbox" class="items-center space-x-1 cursor-pointer">
                    <span><strong>Categories</strong></span>
                    <svg class="h-4 w-4 lg:h-0 lg:w-0 float-right" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </label>
                <hr>
                <div id="categoriesboxmenu" class="w-4/5 lg:w-full absolute lg:relative mt-1 top-full shadow rounded opacity-0 bg-white border border-gray-400 transition delay-75 ease-in-out z-10">
                    <ul class="block text-gray-900">
                        <li><a href="#" class="block px-3 lg:px-0 py-2 hover:bg-gray-200 w-full font-semibold">All</a>
                        </li>
                        <li><a href="#" class="block px-3 lg:px-0 py-2 hover:bg-gray-200 w-full">New & Featured</a></li>
                        <li><a href="#" class="block px-3 lg:px-0 py-2 hover:bg-gray-200 w-full">Men</a></li>
                        <li><a href="#" class="block px-3 lg:px-0 py-2 hover:bg-gray-200 w-full">Women</a></li>
                        <li><a href="#" class="block px-3 lg:px-0 py-2 hover:bg-gray-200 w-full">Kids</a></li>
                    </ul>
                </div>
            </div>
            <div class="sort relative py-[10px] lg:w-full md:w-1/3 w-full">
                <input type="checkbox" id="sortbox" class="hidden absolute">
                <label for="sortbox" class="items-center space-x-1 cursor-pointer">
                    <span><strong>Sort-by</strong></span>
                    <svg class="h-4 w-4 lg:h-0 lg:w-0 float-right" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </label>
                <hr>
                <div id="sortboxmenu" class="w-4/5 lg:w-full absolute lg:relative mt-1 top-full shadow rounded opacity-0 bg-white border border-gray-400 transition delay-75 ease-in-out z-10">
                    <ul class="block text-gray-900">
                        <li>
                            <div class="flex items-center mt-[10px] block px-3 lg:px-0 py-2 hover:bg-gray-200 w-full">
                                <input checked id="filter-seach-1" type="radio" value="" name="filter-seach" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-seach-1" class="ms-2 text-sm">Default</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center mt-[10px] block px-3 lg:px-0 py-2 hover:bg-gray-200 w-full">
                                <input id="filter-seach-2" type="radio" value="" name="filter-seach" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-seach-2" class="ms-2 text-sm">Price (low-to-high)</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center mt-[10px] block px-3 lg:px-0 py-2 hover:bg-gray-200 w-full">
                                <input id="filter-seach-3" type="radio" value="" name="filter-seach" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-seach-3" class="ms-2 text-sm">Price (high-to-low)</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-5/6">
            <div class="md:px-[75px] px-[50px] pt-[20px] pb-[10px]">
                <p>20 results</p>
                <div class="flex flex-col lg:flex-row lg:gap-[122.5px] mb-[25px]">
                    <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                        <a href="./ProductDetail.php" class="block">
                            <div class="mb-2">
                                <img src="../../images/puma.png" alt="">
                            </div>
                            <p class="text-base font-semibold">Puma Men's Caven Sneaker</p>
                            <p class="float-right mt-[10px]">$79.99</p>
                        </a>

                    </div>
                    <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                        <a href="./ProductDetail.php" class="block">
                            <div class="mb-2">
                                <img src="../../images/puma.png" alt="">
                            </div>
                            <p class="text-base font-semibold">Puma Men's Caven Sneaker</p>
                            <p class="float-right mt-[10px]">$79.99</p>
                        </a>
                    </div>
                    <div class="w-full lg:w-1/3">
                        <a href="./ProductDetail.php" class="block">
                            <div class="mb-2">
                                <img src="../../images/puma.png" alt="">
                            </div>
                            <p class="text-base font-semibold">Puma Men's Caven Sneaker</p>
                            <p class="float-right mt-[10px]">$79.99</p>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row lg:gap-[122.5px] mb-[25px]">
                    <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                        <a href="./ProductDetail.php" class="block">
                            <div class="mb-2">
                                <img src="../../images/puma.png" alt="">
                            </div>
                            <p class="text-base font-semibold">Puma Men's Caven Sneaker</p>
                            <p class="float-right mt-[10px]">$79.99</p>
                        </a>
                    </div>
                    <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                        <a href="./ProductDetail.php" class="block">
                            <div class="mb-2">
                                <img src="../../images/puma.png" alt="">
                            </div>
                            <p class="text-base font-semibold">Puma Men's Caven Sneaker</p>
                            <p class="float-right mt-[10px]">$79.99</p>
                        </a>
                    </div>
                    <div class="w-full lg:w-1/3">
                        <a href="./ProductDetail.php" class="block">
                            <div class="mb-2">
                                <img src="../../images/puma.png" alt="">
                            </div>
                            <p class="text-base font-semibold">Puma Men's Caven Sneaker</p>
                            <p class="float-right mt-[10px]">$79.99</p>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row lg:gap-[122.5px] mb-[25px]">
                    <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                        <a href="./ProductDetail.php" class="block">
                            <div class="mb-2">
                                <img src="../../images/puma.png" alt="">
                            </div>
                            <p class="text-base font-semibold">Puma Men's Caven Sneaker</p>
                            <p class="float-right mt-[10px]">$79.99</p>
                        </a>
                    </div>
                    <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                        <a href="./ProductDetail.php" class="block">
                            <div class="mb-2">
                                <img src="../../images/puma.png" alt="">
                            </div>
                            <p class="text-base font-semibold">Puma Men's Caven Sneaker</p>
                            <p class="float-right mt-[10px]">$79.99</p>
                        </a>
                    </div>
                    <div class="w-full lg:w-1/3">
                        <a href="./ProductDetail.php" class="block">
                            <div class="mb-2">
                                <img src="../../images/puma.png" alt="">
                            </div>
                            <p class="text-base font-semibold">Puma Men's Caven Sneaker</p>
                            <p class="float-right mt-[10px]">$79.99</p>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row lg:gap-[122.5px] mb-[25px]">
                    <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                        <a href="./ProductDetail.php" class="block">
                            <div class="mb-2">
                                <img src="../../images/puma.png" alt="">
                            </div>
                            <p class="text-base font-semibold">Puma Men's Caven Sneaker</p>
                            <p class="float-right mt-[10px]">$79.99</p>
                        </a>
                    </div>
                    <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                        <a href="./ProductDetail.php" class="block">
                            <div class="mb-2">
                                <img src="../../images/puma.png" alt="">
                            </div>
                            <p class="text-base font-semibold">Puma Men's Caven Sneaker</p>
                            <p class="float-right mt-[10px]">$79.99</p>
                        </a>
                    </div>
                    <div class="w-full lg:w-1/3">
                        <a href="./ProductDetail.php" class="block">
                            <div class="mb-2">
                                <img src="../../images/puma.png" alt="">
                            </div>
                            <p class="text-base font-semibold">Puma Men's Caven Sneaker</p>
                            <p class="float-right mt-[10px]">$79.99</p>
                        </a>
                    </div>
                </div>
                <form action="" class="mb-[10px]">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                        More products
                    </button>
                </form>
            </div>

        </div>
    </div>
    <script src="../script/header.js"></script>
</body>

</html>